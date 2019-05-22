<?php
session_start();
if (isset($_SESSION['userName'])){
    $user_name = $_SESSION['userName'];
}else header('Refresh: 0; url=login.php');

if (isset($_GET['logout'])){
    session_destroy();
}
include 'dbOpen.php';
include "function.php";
$title = 'My bets';

//достаём категории
$getCategories = "SELECT * FROM cathegory";
$categoriesResult = mysqli_query($connection, $getCategories);
if(!$categoriesResult) {
    echo "Запрос не удался";
}
//достаём лоты
$getLots = "SELECT lots.id, lots.title, lots.picture, cathegory.name, lots.start_price ";
$getLots .= "FROM `lots` INNER JOIN `cathegory` ON lots.category_id = cathegory.id";
$lotsResult = mysqli_query($connection, $getLots);
if(!$lotsResult) {
    echo "Запрос не удался";
}

$content = renderTemplate('my-bets.php', [
    'user_name' => $user_name,
    'lotsResult' => $lotsResult,
    'categoriesResult' => $categoriesResult
]);

$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
]);

print($layout);
?>