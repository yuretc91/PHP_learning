<?php
session_start();
if (isset($_SESSION['userName'])){
    $user_name = $_SESSION['userName'];
}
include 'dbOpen.php';
include "function.php";
include "registration.php";
$title = 'Sign-up title';

if (isset($_POST['signUp'])){
    $newUser = new Registration($_POST['email'], $_POST['name'], $_POST['password'], $_POST['message']);
    //$email = $_POST['email'];

    /*$hashFormat = '$2y$10$';
    $salt = substr(sha1(mt_rand()),0,22);
    $hashFormat_and_salt = $hashFormat . $salt;
    $password = crypt($_POST['password'], $hashFormat_and_salt);*/

    //$password = md5($_POST['password']);
    //$newUserName = $_POST['name'];
    //$contact = $_POST['message'];
    $inputNewUser = "INSERT INTO `users`(`email`, `name`, `password`, `contact`) VALUES ('{$newUser->email}', '{$newUser->name}', '{$newUser->password}', '{$newUser->contact}')";
    $inputNewUserResult = mysqli_query($connection, $inputNewUser);
    if(!$inputNewUserResult) {
        echo "Запрос не удался";
    }
}

//достаём категории
$getCategories = "SELECT * FROM cathegory";
$categoriesResult = mysqli_query($connection, $getCategories);
if(!$categoriesResult) {
    echo "Запрос не удался";
}


$content = renderTemplate('sign-up.php', [
    'user_name' => $user_name,
    'categoriesResult' => $categoriesResult
]);

$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
]);

print($layout);
?>