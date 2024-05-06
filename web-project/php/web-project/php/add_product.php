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
    } else if (empty($category_id)) {
        $err = "Thiếu số loại sản phẩm";
    } else {
        $querry = "SELECT * FROM products";
        $result = mysqli_query($conn, $querry);
        $category_querry = "SELECT * FROM product_categories";
        $category_result = mysqli_query($conn, $category_querry);
        if ($result->num_rows === 0) {
            $insert = "INSERT INTO products (`name`, category_id, price, `description`, `image_url`) VALUES('$name', '$category_id', '$price', '$description', '$image_url')";
            if ($insert_result = mysqli_query($conn, $insert)) $ok = "check";
        }
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc() && $category_row = $category_result->fetch_assoc()) {
                error_reporting(E_ALL ^ E_WARNING);
                if ($row['name'] == $name) {
                    $err = "Đã có sản phẩm!";
                    $ok = "";
                    break;
                }
                if ($row['name'] != $name && $category_row['ID'] == $category_id) {
                    $ok = "Đã thêm sản phẩm";
                    $err = "";
                    $insert = "INSERT INTO products (`name`, category_id, price, `description`, `image_url`) VALUES('$name', '$category_id', '$price', '$description', '$image_url')";
                    $insert_result = mysqli_query($conn, $insert);
                    break;
                } else $err = "Không thể thêm sản phẩm";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="..\css\font.css">
    <link rel="stylesheet" href="..\css\add1.css">
    <link rel="stylesheet" href="..\css\login1.css">
</head>

<body>
    <form action='AdminUI.php'><button class='button-user'>Trang Chủ</button></form> <br> <br>
    <div id="box" style="width: 500px; display: block;">
        <form action="add_product.php" method="post">
            <span class="header1" style="margin-left: 150px;">Thêm sản phẩm</span> <br>
            <span class="header2" style="color: red;"><?php echo "$err" ?></span> <br>
            <p class="add">Name <input type="text" name="name"></p>
            <p class="add">Catetogy Id <input type="text" name="category_id"></p>
            <p class="add">Price <input type="text" name="price"></p>
            <p class="add">Description <input type="text" name="description"></p>
            <p class="add">Image_url <input type="text" name="image_url"></p>
            <p><input type="submit" class="button-user" style="margin-left: 150px;" value="Thêm sản phẩm" name="add"></p>
            <?php if (!empty($ok)) header('location:AdminUI.php');
            ?>
        </form>
    </div>
</body>

</html>