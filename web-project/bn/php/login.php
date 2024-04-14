<?php
session_start();
require "test.php";
@$usr = $_POST["usr"];
@$psw = $_POST["psw"];
$err = "";
$ok = "";
if (isset($_POST["login"])) {
    if (empty($usr) && empty($psw)) {
        $err = "Thiếu username và password";
    } else if (empty($usr)) {
        $err = "Thiếu username";
    } else if (empty($psw)) {
        $err = "Thiếu password";
    } else {
        $select = "SELECT * FROM users";
        if ($check = mysqli_query($conn, $select)) {
            while ($run = $check->fetch_assoc()) {
                if ($run['username'] == $usr && $run['password'] == $psw) {
                    $ok = "Đăng nhập thành công";
                    break;
                }
                if ($run['username'] != $usr || $run['password'] != $psw) {
                    $err = "Sai tên tài khoản hoặc mật khẩu";
                }
                if ($run['username'] != $usr && $run['password'] != $psw) {
                    $err = "Chưa có tài khoản!";
                }
            }
        }
    }
}
$_SESSION["usr-login"] = $usr;
$_SESSION["psw-login"] = $psw;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="..\css\font.css">
    <link rel="stylesheet" href="..\css\login.css">
</head>

<body>
    <span class="login-button">
        <form action="home.php"><button id="button-user">Trang chủ</button>
    </span></form>
    <div id="panel" style="display:block; height:340px">
        <form action="login.php" method="post">
            <span class="header">Đăng nhập</span> <br>
            <span class="header2" style="color: red;"><?php echo "$err" ?></span> <br>
            <p class="login">Username <input type="text" name="usr"></p>
            <p class="login">Password <input type="text" name="psw"></p>
            <p><input type="submit" value="Đăng nhập" name="login"></p>
            <?php if (!empty($ok)) header('location:home2.php') ?>
        </form>
        <?php if ($err == "Chưa có tài khoản!" && isset($_POST["login"])) echo "<p><form action='signup.php'><input type='submit' value='Đăng kí' name='login'></p></form>" ?>
    </div>
</body>

</html>