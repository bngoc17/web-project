<?php
session_start();
require "test.php";
@$ma = $_POST["maID"];
@$name = $_POST["name"];
@$category_id = $_POST["category_id"];
@$price = $_POST["price"];
@$description = $_POST["description"];
@$image_url = $_POST["image_url"];
$err = "";
$ok = "";
if (isset($_POST["change"])) {
    if (empty($name)) {
        echo '"<script type="text/javascript">
                window.onload = function () { alert ("thiếu tên rồi bạn")}
                </script>"';
    } else {
        if (empty($category_id)) {
            echo '"<script type="text/javascript">
                    window.onload = function () { alert ("hình như không có cái loại này or chưa nhập")}
                    </script>"';
        } else {
            $ok = "oke";
            $err = "";
            $chay = "UPDATE products SET name = '$name',  category_id = '$category_id', price = '$price', description = '$description',image_url = '$image_url' WHERE ID = '$ma' ";
            $chay_cai_moi = mysqli_query($conn, $chay) or die("Couldn't add new entry: " . mysqli_error($conn));
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
    <link rel="stylesheet" href="..\css\add.css">
    <link rel="stylesheet" href="..\css\login1.css">
</head>

<body>
    <form action='AdminUI.php'><button class='button-user'>Trang Chủ</button></form> <br> <br>
    <div id="box" style="width: 500px; display: block;">
        <form action="change.php" method="post">
            <span class="header1">Thay đổi thông tin sản phẩm</span> <br>
            <span class="header2" style="color: red;"><?php echo "$err" ?></span> <br>
            <p>nhap ma</p><input class="change" name='maID'>
            <p class="change">Name <input type="text" name="name"></p>
            <p class="change">Catetogy Id <input type="text" name="category_id"></p>
            <p class="change">Price <input type="text" name="price"></p>
            <p class="change">Description <input type="text" name="description"></p>
            <p class="change">Image_url <input type="text" name="image_url"></p>
            <p><input type="submit" value="thay đổi sản phẩm" name="change"></p>
            <?php if (!empty($ok)) header('location:AdminUI.php');
            ?>
        </form>
    </div>
</body>

</html>