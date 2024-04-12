<?php
    $sv = "localhost";
    $usr = "root";
    $psw = "";
    $dbname = "KHBNstore";
    $conn = @new mysqli($sv, $usr, $psw, $dbname);
    if($conn -> connect_error) {
        die("connect fail ". $conn -> connect_error);
    } //else echo"connect!";
?>