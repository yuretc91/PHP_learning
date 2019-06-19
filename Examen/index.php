<?php
/*session_start();
if (isset($_SESSION['userName'])){
    $user_name = $_SESSION['userName'];
}*/
include 'dbOpen.php';
include "function.php";



$title = 'Main page';


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

//достаём теги
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

/*$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
    ]);*/

print($content);