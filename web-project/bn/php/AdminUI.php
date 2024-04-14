<?php
session_start();
include_once "test.php";
?>
<!DOCTYPE html>
    <script src="hello.js"></script>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home2</title>
    <link rel="stylesheet" href="..\css\box.css">
    <link rel="stylesheet" href="..\css\font.css">
    <link rel="stylesheet" href="..\css\navbar.css">
    <link rel="stylesheet" href="..\css\login.css">
    <script src="..\js\login.js"></script>
    <script src="..\js\search.js"></script>
</head>

<body style="z-index: -1;">
    <div>
        <img src="https://cdn-icons-png.flaticon.com/128/3917/3917559.png" alt="" style="width: 35px; height: 35px; position: absolute;">
        <span class="login-button" onclick="login()">
            <button class="button-user">
                <?php echo $_SESSION["TENADMIN"]; ?>
            </button>
        </span>
        <div id="panel" style="height: 250px;">
            <button class="button-user" style="float: right; margin-top:5px" onclick="login()">Đóng x</button>
            <p class="header">Hello <?php echo "$usr" ?></p> <br>
            <form action="logout.php" method="post"><input type="submit" name="logout" value="Đăng Xuất"></form>
        </div>
    </div>

    </div>
    <div style="padding-top:20%;padding-right:10px;font-weight:bold">
    <form action="select.php">
        <button>XEM SẢN PHẨM</button>
    </form>
    <button onmouseover="hien_thi_them()" id="themmoi">THÊM HÀNG</button>

    <div id="banthemsanpham" style="display: none;">
        <div>
            <button >THÊM SẢN PHẨM</button>
            <button>THÊM LOẠI SẢN PHẨM</button>
        </div>
    </div>

    </div>
</body>

</html>