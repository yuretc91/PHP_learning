<?php 
$login = $_POST["login"];
$email = $_POST["email"];
$name = $_POST["name"];
$tel = $_POST["tel"];
$selfInfo = $_POST["selfinfo"];

if (!file_exists("uploads")){
    mkdir("uploads", 0777);
}
if (!file_exists("users")){
    mkdir("users", 0777);
}
if (!file_exists("users/users.txt")){
    $fp = fopen("users/users.txt", "w");
    fwrite($fp, "");
    fclose($fp);
}

file_put_contents('users/users.txt', $name . "%" . $email . "%" . $login . "%" . $tel . "%" . $selfInfo . "%uploads/" . $_FILES["avatar"]["name"] . PHP_EOL, FILE_APPEND);



move_uploaded_file($_FILES["avatar"]["tmp_name"], "uploads/" . $_FILES["avatar"]["name"]);
include "secondPage.php";

?>
