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


$content = renderTemplate('archive.php', [
    'tags' => $tagsResult
]);

/*$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title
    ]);*/

print($content);