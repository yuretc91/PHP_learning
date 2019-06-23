<?php
session_start();
if (isset($_SESSION['userLogin'])){
    $user_login = $_SESSION['userLogin'];
}
include 'dbOpen.php';
include "function.php";


$getTags = "SELECT * FROM tags";
$tagsResult = mysqli_query($connection, $getTags);
if(!$tagsResult) {
    echo "Запрос не удался";
}
if (isset($_GET['post'])){
    $getPost = "SELECT * FROM posts WHERE id = '{$_GET['post']}'";
    $postResult = mysqli_query($connection, $getPost);
    if(!$postResult) {
        echo "Запрос не удался";
    }

    $getComments = "SELECT * FROM comments WHERE post_id = '{$_GET['post']}'";
    $commentsResult = mysqli_query($connection, $getComments);
    if(!$commentsResult) {
        echo "Запрос не удался";
    }
}


$content = renderTemplate('single.php', [
    'tags' => $tagsResult,
    'posts' => $postResult,
    'comments' => $commentsResult
]);

print($content);