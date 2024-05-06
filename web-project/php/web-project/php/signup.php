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
        $result = mysqli_query($conn, $select);
        if($result->num_rows === 0) {
            $insert = "INSERT INTO users (username, password) VALUES('$usr', '$psw')";
            if($result = mysqli_query($conn, $insert)) $ok = "check";
        }
        if (($result->num_rows > 0)) {
            while ($row = $result->fetch_assoc()) {
                if ($row['username'] == $usr) {
                    $err = "Đã có tài khoản!"; $ok = "";
                    break;
                }
                if ($row['username'] != $usr && $row['password'] != $psw) {
                    $ok = "check"; $err = "";
                    $insert = "INSERT INTO users (username, password) VALUES('$usr', '$psw')";
                    $querry = mysqli_query($conn, $insert);
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
    <link rel="stylesheet" href="..\css\login1.css">
</head>

<body>
    <span class="login-button">
        <form action="..\home.php"><button id="button-user">Trang chủ</button>
    </span></form>
    <div id="panel" style="display:block; height:340px">
        <form action="signup.php" method="post">
            <span class="header">Đăng kí</span> <br>
            <span class="header2" style="color: red;"><?php echo "$err" ?></span> <br>
            <p class="login">Username <input type="text" name="usr"></p>
            <p class="login">Password <input type="text" name="psw"></p>
            <p><input type="submit" class="button-user" style="margin-left: 210px;" value="Đăng kí" name="signup"></p>
            <?php if (!empty($ok)) header('location:home2.php') ?>
        </form>
        <?php if ($err == "Đã có tài khoản!" && isset($_POST["signup"])) echo "<p><form action='login.php'><input type='submit' value='Đăng nhập' name='login'></p></form>" ?>
    </div>
</body>

</html>