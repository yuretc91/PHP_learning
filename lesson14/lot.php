<?php
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



$content = renderTemplate('lot.php', [
    'user_name' => $user_name,
    'categoriesResult' => $categoriesResult,
    'lotsResult' => $lotsResult
]);

$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
]);

print($layout);
?>