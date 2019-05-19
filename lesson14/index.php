<?php
include 'dbOpen.php';
include "function.php";
$is_auth = rand(0, 1);

$user_name = 'Yura'; // укажите здесь ваше имя
$title = 'Title from layout';


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

$content = renderTemplate('index.php', [
    'user_name' => $user_name,
    'categoriesResult' => $categoriesResult,
    'lotsResult' => $lotsResult
]);

$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
    ]);

print($layout);