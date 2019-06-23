<?php
session_start();
if (isset($_SESSION['userLogin'])){
	$user_login = $_SESSION['userLogin'];
}
include 'dbOpen.php';
include "function.php";


$content = renderTemplate('sign-in.php', [
	'tags' => $tagsResult
]);

print($content);
?>