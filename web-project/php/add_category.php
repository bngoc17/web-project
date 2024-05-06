<?php
session_start();
require "test.php";
@$category_id = $_POST["category_id"];
@$category_name = $_POST["category_name"];
$err = "";
$ok = "";
if (isset($_POST["category"])) {
    if (empty($category_name)) {
        $err = "Thiếu tên loại sản phẩm";
    }
    if (empty($category_id) && $category_id == 0) {
        $err = "Thiếu id loại sản phẩm";
    }
    if (empty($category_name) && empty($category_id)) {
        $err = "Thiếu cả 2";
    } else {
        $category_querry = "SELECT * FROM product_categories";
        $category_result = mysqli_query($conn, $category_querry);
        if($category_result->num_rows === 0) {
            $category_insert = "INSERT INTO product_categories VALUES($category_id, '$category_name')";
            if($insert_result = mysqli_query($conn, $category_insert)) $ok = "check";
        }
        if ($category_result->num_rows > 0) { 
            while ($category_row = $category_result->fetch_assoc()) {
                if ($category_row['name'] == $category_name) {
                    $err = "Đã có tên loại sản phẩm!";
                    break;
                }
                if ($category_row['ID'] == $category_id) {
                    $err = "Đã có id loại sản phẩm!";
                    break;
                }
                if ($category_row['name'] != $category_name && $category_row['ID'] != $category_id) {
                    $category_insert = "INSERT INTO product_categories VALUES($category_id, '$category_name')";
                    $category_insert_result = mysqli_query($conn, $category_insert);    
                    $ok = "Đã thêm loại sản phẩm";
                }
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
        <form action="add_category.php" method="post">
            <span class="header1" style="margin-left: 150px;">Thêm loại sản phẩm</span> <br>
            <span class="header2" style="color: red;"><?php echo "$err" ?></span> <br>
            <p class="add">Catetogy product id <input type="text" name="category_id"></p>
            <p class="add">Catetogy name <input type="text" name="category_name"></p> 
            <span><input type="submit" class="button-user" style="margin-left: 150px;" value="Thêm loại sản phẩm" name="category"></span>
            <?php if(!empty($ok)) header('location:AdminUI.php')?>
        </form>
    </div>
</body>

</html>