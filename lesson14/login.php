<?php
session_start();
if (isset($_SESSION['userName'])){
    $user_name = $_SESSION['userName'];
}
include 'dbOpen.php';
include "function.php";
$title = 'Login';

if (isset($_POST['login'])){
    $getUser = "SELECT * FROM users WHERE email = '{$_POST['email']}'";
    $getUserResult = mysqli_query($connection, $getUser);
    if(!$getUserResult) {
        echo "Запрос не удался";
    }

    if (mysqli_num_rows($getUserResult) != 0){
        $getUserResult = mysqli_fetch_assoc($getUserResult);
        if ($_POST['password'] == $getUserResult['password']){
            $_SESSION['userName'] = $getUserResult['name'];
        }else echo 'password is incorrect';

    } else echo 'This user not found';


}

//достаём категории
$getCategories = "SELECT * FROM cathegory";
$categoriesResult = mysqli_query($connection, $getCategories);
if(!$categoriesResult) {
    echo "Запрос не удался";
}


$content = renderTemplate('login.php', [
    'user_name' => $user_name,
    'categoriesResult' => $categoriesResult
]);

$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
]);

print($layout);
?>