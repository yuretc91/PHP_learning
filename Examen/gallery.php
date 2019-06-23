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

$content = renderTemplate('gallery.php', [
    'tags' => $tagsResult
]);


print($content);