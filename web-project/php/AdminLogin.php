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
</head>

<body>
    <div>
        <h3>ĐĂNG NHẬP ADMIN</h3>
        <form action="AdminLogin.php" method="POST">
            tên của bạn <input type="text" name="tenAD"> <br>
            mật khẩu của bạn <input type="text" name="mkAD"> <br>
            <input type="submit" value="đăng nhập" name="ADsub">
        </form>
    </div>
</body>

</html>