<?php
if (isset($_POST["logout"])) {
    session_start();
    session_unset();
    session_destroy();
    $_SESSION = array();
    header('location:home.php');
}
