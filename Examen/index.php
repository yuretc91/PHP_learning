<?php
/*session_start();
if (isset($_SESSION['userName'])){
    $user_name = $_SESSION['userName'];
}*/
include 'dbOpen.php';
include "function.php";



$title = 'Main page';


//достаём категории
/*$getCategories = "SELECT * FROM cathegory";
$categoriesResult = mysqli_query($connection, $getCategories);
if(!$categoriesResult) {
    echo "Запрос не удался";
}*/


//достаём теги
$getTags = "SELECT * FROM tags";
$tagsResult = mysqli_query($connection, $getTags);
if(!$tagsResult) {
    echo "Запрос не удался";
}

$content = renderTemplate('index.php', [
    'tags' => $tagsResult

]);

/*$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
    ]);*/

print($content);