<?php
session_start();
if (isset($_SESSION['userLogin'])){
    $user_login = $_SESSION['userLogin'];
}
include 'dbOpen.php';
include "function.php";



//достаём слайды
$getSlides = "SELECT * FROM slider";
$slidesResult = mysqli_query($connection, $getSlides);
if(!$slidesResult) {
    echo "Запрос не удался";
}


//достаём теги
$getTags = "SELECT * FROM tags";
$tagsResult = mysqli_query($connection, $getTags);
if(!$tagsResult) {
    echo "Запрос не удался";
}

//достаём превью постов
$getPostsPreview = "SELECT * FROM posts_preview LIMIT 3";
$postsPreviewResult = mysqli_query($connection, $getPostsPreview);
if(!$postsPreviewResult) {
    echo "Запрос не удался";
}

$content = renderTemplate('index.php', [
    'tags' => $tagsResult,
    'slides' => $slidesResult,
    'postsPreview' => $postsPreviewResult

]);


print($content);