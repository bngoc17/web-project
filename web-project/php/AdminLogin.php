<?php
session_start();
include "test.php";
if (isset($_POST["ADsub"])) {
    $tenAD = $_POST["tenAD"];
    $mkADmin = $_POST["mkAD"];
    if ($_POST["tenAD"] == '' || empty($_POST["mkAD"]))
        echo '<script type="text/javascript">
            window.onload = function () { alert ("dien thieu thong tin")}
        </script>';
    else {
        $query = "SELECT * FROM admins where username = '$tenAD' and password = '$mkADmin' ";
        $run = $conn->query($query);
        if ($run->num_rows > 0) {
            $_SESSION["TENADMIN"] =  $_POST["tenAD"];
            header('location:AdminUI.php');
        } else {
            echo '"<script type="text/javascript">
                window.onload = function () { alert ("sai thong ve mk hoac la ten roi ban oi")}
                </script>"';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="..\css\font.css">
    <link rel="stylesheet" href="..\css\login1.css">
</head>

<body>
    <span class="login-button">
        <form action="..\home.php"><button id="button-user">Trang chủ</button>
    </span></form>
    <div id="panel" style="display:block; height:340px">
        <span class="header">ĐĂNG NHẬP ADMIN<span></span>
        <form action="AdminLogin.php" method="POST">
        <p class="login">tên của bạn <input type="text" name="tenAD"></p>
        <p class="login">mật khẩu của bạn <input type="text" name="mkAD"></p>
            <input type="submit" class="button-user" style="margin-left: 210px;" value="đăng nhập" name="ADsub">
        </form>
    </div>
</body>

</html>