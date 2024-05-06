<?php
session_start();
require "test.php";
@$name = $_POST["name"];
@$category_id = $_POST["category_id"];
@$price = $_POST["price"];
@$description = $_POST["description"];
@$image_url = $_POST["image_url"];
@$category_name = $_POST["category_name"];
$err = "";
$ok = "";
if (isset($_POST["category"])) {
    if (empty($category_name)) {
        $err = "Thiếu tên loại sản phẩm";
    }
    $category_querry = "SELECT * FROM product_categories";
    $category_result = mysqli_query($conn, $category_querry);
    if ($category_result->num_rows > 0) {
        $category_insert = "INSERT INTO product_categories(name) VALUES('$category_name')";
        $category_insert_result = mysqli_query($conn, $category_insert);
        while ($category_row = $category_result->fetch_assoc()) {
            if ($category_row['name'] == $category_name) {
                $err = "Đã có loại sản phẩm!";
                break;
            }
        }
    }
}
if (isset($_POST["add"])) {
    if (empty($name)) {
        $err = "Thiếu tên sản phẩm";
    }
    if (empty($category_id)) {
        $err = "Thiếu số loại sản phẩm";
    }
    $querry = "SELECT * FROM products";
    $result = mysqli_query($conn, $querry);
    if ($result->num_rows > 0) {
        $insert = "INSERT INTO products (name, category_id, price, description, image_url) VALUES('$name', '$category_id', '$price', '$description', '$image_url')";
        $insert_result = mysqli_query($conn, $insert);
        while ($row = $result->fetch_assoc()) {
            if ($row['name'] == $name) {
                $err = "Đã có sản phẩm!";
                break;
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
    <title>Document</title>
    <link rel="stylesheet" href="..\css\font.css">
    <link rel="stylesheet" href="..\css\add.css">
    <script src="..\js\admin.js"></script>
</head>

<body>
    <span class="add-button" onclick="add()">
        <button id="button-admin">
            add
        </button>
    </span>
    <div id="box" style="width: 500px;">
        <form action="temp.php" method="post">
            <button class="button-user" style="float: right; margin-top:5px;" onclick="login()">Đóng x</button>
            <span class="header1">Thêm sản phẩm</span> <br>
            <span class="header2" style="color: red;"><?php echo "$err" ?></span> <br>
            <p class="add">Catetogy name <input type="text" name="category_name"></p> <span><input type="submit" value="Thêm loại sản phẩm" name="category"></span>
            <p class="add">Name <input type="text" name="name"></p>
            <p class="add">Catetogy Id <input type="text" name="category_id"></p>
            <p class="add">Price <input type="text" name="price"></p>
            <p class="add">Description <input type="text" name="description"></p>
            <p class="add">Image_url <input type="text" name="image_url"></p>
            <p><input type="submit" value="Thêm sản phẩm" name="add"></p>
        </form>
    </div>
</body>

</html>