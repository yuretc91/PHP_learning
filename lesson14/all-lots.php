<?php
session_start();
if (isset($_SESSION['userName'])){
    $user_name = $_SESSION['userName'];
}
include 'dbOpen.php';
include "function.php";
$title = 'All lots title';

//достаём категории
$getCategories = "SELECT * FROM cathegory";
$categoriesResult = mysqli_query($connection, $getCategories);
if(!$categoriesResult) {
    echo "Запрос не удался";
}


if (isset($_GET['category'])){
    $categoryId = $_GET['category'];
}

$getOneCategory = "SELECT * FROM cathegory WHERE id = '{$categoryId}'";
$oneCategoryResult = mysqli_fetch_assoc(mysqli_query($connection, $getOneCategory));
if(!$oneCategoryResult) {
    echo "Запрос не удался";
}

//достаём лоты
$getLots = "SELECT lots.id, lots.title, lots.picture, cathegory.name, lots.start_price ";
$getLots .= "FROM `lots` INNER JOIN `cathegory` ON lots.category_id = cathegory.id";
$lotsResult = mysqli_query($connection, $getLots);
if(!$lotsResult) {
    echo "Запрос не удался";
}




$content = renderTemplate('all-lots.php', [
    'user_name' => $user_name,
    'categoriesResult' => $categoriesResult,
    'lotsResult' => $lotsResult,
    'oneCategoryResult' => $oneCategoryResult
]);

$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
]);

print($layout);
?>