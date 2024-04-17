<?php
session_start();
require "test.php";
@$name = $_POST["name"];
@$category_id = $_POST["category_id"];
@$price = $_POST["price"];
@$description = $_POST["description"];
@$image_url = $_POST["image_url"];
$err = "";
$ok = "";
if (isset($_POST["add"])) {
    if (empty($name)) {
        $err = "Thiếu tên sản phẩm";
    }
    if (empty($category_id)) {
        $err = "Thiếu số loại sản phẩm";
    } else {
    $querry = "SELECT * FROM products";
    $result = mysqli_query($conn, $querry);
    if($result->num_rows === 0) {
        $insert = "INSERT INTO products (`name`, category_id, price, `description`, `image_url`) VALUES('$name', '$category_id', '$price', '$description', '$image_url')";
        if($insert_result = mysqli_query($conn, $insert)) $ok = "check";
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['name'] == $name) {
                $err = "Đã có sản phẩm!"; $ok = "";
                break;
            }
            if ($row['category_id'] != $category_id) {
                $err = "Chưa có loại sản phẩm này"; $ok = "";
            }
            if($row['name'] != $name && $row['category_id'] == $category_id) {
                $ok = "Đã thêm sản phẩm"; $err = "";
                $insert = "INSERT INTO products (`name`, category_id, price, `description`, `image_url`) VALUES('$name', '$category_id', '$price', '$description', '$image_url')";
                $insert_result = mysqli_query($conn, $insert);
                break;
            }
        }
    }
}}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="..\css\font.css">
    <link rel="stylesheet" href="..\css\add.css">
    <link rel="stylesheet" href="..\css\login.css">
</head>

<body>
    <form action='AdminUI.php'><button class='button-user'>Trang Chủ</button></form> <br> <br>
    <div id="box" style="width: 500px; display: block;">
        <form action="add_product.php" method="post">
            <span class="header1">Thêm sản phẩm</span> <br>
            <span class="header2" style="color: red;"><?php echo "$err" ?></span> <br>
            <p class="add">Name <input type="text" name="name"></p>
            <p class="add">Catetogy Id <input type="text" name="category_id"></p>
            <p class="add">Price <input type="text" name="price"></p>
            <p class="add">Description <input type="text" name="description"></p>
            <p class="add">Image_url <input type="text" name="image_url"></p>
            <p><input type="submit" value="Thêm sản phẩm" name="add"></p>
            <?php if(!empty($ok)) header('location:AdminUI.php');
            ?>
        </form>
    </div>
</body>

</html>