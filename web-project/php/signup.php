<?php
session_start();
require "test.php";
@$usr = $_POST["usr"];
@$psw = $_POST["psw"];
$err = "";
$ok = "";
if (isset($_POST["signup"])) {
    if (empty($usr) && empty($psw)) {
        $err = "Thiếu username và password";
    } else if (empty($usr)) {
        $err = "Thiếu username";
    } else if (empty($psw)) {
        $err = "Thiếu password";
    } else {
        $select = "SELECT * FROM users";
        if ($check = mysqli_query($conn, $select)) {
            $insert = "INSERT INTO users (username, password) VALUES('$usr', '$psw')";
            $querry = mysqli_query($conn, $insert);
            while ($result = $check->fetch_assoc()) {
                if ($result['username'] == $usr) {
                    $err = "Đã có tài khoản!"; $ok = "";
                    break;
                }
                if ($result['username'] != $usr && $result['password'] != $psw) {
                    $ok = "check"; $err = "";
                }
            }
        }
    }
}
$_SESSION["usr-signup"] = $usr;
$_SESSION["psw-signup"] = $psw;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="..\css\font.css">
    <link rel="stylesheet" href="..\css\login.css">
</head>

<body>
    <span class="login-button">
        <form action="home.php"><button id="button-user">Trang chủ</button>
    </span></form>
    <div id="panel" style="display:block; height:340px">
        <form action="signup.php" method="post">
            <span class="header">Đăng kí</span> <br>
            <span class="header2" style="color: red;"><?php echo "$err" ?></span> <br>
            <p class="login">Username <input type="text" name="usr"></p>
            <p class="login">Password <input type="text" name="psw"></p>
            <p><input type="submit" value="Đăng kí" name="signup"></p>
            <?php if (!empty($ok)) header('location:home2.php') ?>
        </form>
        <?php if ($err == "Đã có tài khoản!" && isset($_POST["signup"])) echo "<p><form action='login.php'><input type='submit' value='Đăng nhập' name='login'></p></form>" ?>
    </div>
</body>

</html>