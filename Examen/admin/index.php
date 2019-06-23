<?php
session_start();
if (isset($_SESSION['userLogin'])){
    $user_login = $_SESSION['userLogin'];
}else header("Location: ../index.php");
include "../dbOpen.php";
include_once "head.php";
if (isset($_GET['logout'])){
    $_SESSION['userLogin'] = [];
    session_destroy();
    header("Location: ../index.php");
}
include_once "main.php";
?>