<?php
/*session_start();
if (isset($_SESSION['userName'])){
    $user_name = $_SESSION['userName'];
}*/
include 'dbOpen.php';
include "function.php";


$getTags = "SELECT * FROM tags";
$tagsResult = mysqli_query($connection, $getTags);
if(!$tagsResult) {
    echo "Запрос не удался";
}
if (isset($_GET['post']))
$getPost = "SELECT * FROM posts WHERE id = '{$_GET['post']}'";
$postResult = mysqli_query($connection, $getPost);
if(!$postResult) {
    echo "Запрос не удался";
}

$content = renderTemplate('single.php', [
    'tags' => $tagsResult,
    'post' => $postResult
]);

/*$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
    ]);*/

print($content);