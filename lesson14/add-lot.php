<?php
session_start();
if (isset($_SESSION['userName'])){
    $user_name = $_SESSION['userName'];
}else header('Refresh: 0; url=login.php');

if (isset($_GET['logout'])){
    $_SESSION = [];
    session_destroy();
}
include 'dbOpen.php';
include "function.php";
$title = 'Add lot title';
if (isset($_POST['submit'])){
    $lot_name = $_POST['lot-name'];
    $lot_category = $_POST['category'];
    $lot_description = $_POST['message'];
    $lot_img = "uploads/" . $lot_name . ".jpg";
    move_uploaded_file($_FILES["lot-img"]["tmp_name"], "uploads/" . $lot_name . ".jpg");
    $lot_rate = $_POST['lot-rate'];
    $lot_step = $_POST['lot-step'];
    $lot_date = $_POST['lot-date'];



    $insertLot = "INSERT INTO `lots`(`title`, `description`, `picture`, `start_price`, `end_date`, `staf_step`, `user_id`, `category_id`) ";
    $insertLot .= "VALUES ('{$lot_name}','{$lot_description}','{$lot_img}','{$lot_rate}','{$lot_date}','{$lot_step}','7','1')";
    $insertLotResult = mysqli_query($connection, $insertLot);
    if(!$insertLotResult) {
        echo "Запрос не удался";
    }

}

//достаём категории
$getCategories = "SELECT * FROM cathegory";
$categoriesResult = mysqli_query($connection, $getCategories);
if(!$categoriesResult) {
    echo "Запрос не удался";
}




$content = renderTemplate('add-lot.php', [
    'user_name' => $user_name,
    'categoriesResult' => $categoriesResult,
    'lotsResult' => $lotsResult,
    'categoriesResult' => $categoriesResult
]);

$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
]);

print($layout);
?>