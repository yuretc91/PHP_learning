<?php
session_start();
if (isset($_SESSION['userName'])){
    $user_name = $_SESSION['userName'];
}
include 'dbOpen.php';
include "function.php";
$title = 'Lot title';
if (isset($_GET['lot'])){
    $lotId = $_GET['lot'];
}


$getCategories = "SELECT * FROM cathegory";
$categoriesResult = mysqli_query($connection, $getCategories);
if(!$categoriesResult) {
    echo "Запрос не удался";
}

$getLots = "SELECT lots.id, lots.title, lots.picture, lots.description, lots.staf_step, cathegory.name ";
$getLots .= "FROM `lots` INNER JOIN `cathegory` ON lots.category_id = cathegory.id WHERE lots.id = '{$lotId}'";
$lotsResult = mysqli_query($connection, $getLots);
if(!$lotsResult) {
    echo "Запрос не удался";
}

$getLotStaf = "SELECT user_staf.staf_date, user_staf.amount, users.name FROM user_staf RIGHT JOIN users ON user_staf.user_id = users.id WHERE user_staf.lot_id = '{$lotId}' LIMIT 10";
$lotStafResult = mysqli_query($connection, $getLotStaf);
if(!$lotStafResult) {
    echo "Запрос не удался";
}



$content = renderTemplate('lot.php', [
    'user_name' => $user_name,
    'categoriesResult' => $categoriesResult,
    'lotsResult' => $lotsResult,
    'lotStafResult' => $lotStafResult
]);

$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
]);

print($layout);
?>