<?php
require ('db.php');
    unset($_SESSION['USER_LOGIN']);
    unset($_SESSION['USER_ID']);
    unset($_SESSION['USER_NAME']);
    session_unset();
    session_destroy();
    header('location:login.php');
    die();
?>