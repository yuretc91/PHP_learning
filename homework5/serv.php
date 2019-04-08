<?php
if ($_POST["login"] == "" || $_POST["password"] == "" || $_POST["email"] == ""){
    header('Refresh: 5; url=index.php'); //перенаправление
    echo "Fill in all form fields. After 5 seconds you will be automatically redirected to re-enter data";
}elseif (strlen($_POST["login"]) < 3 || strlen($_POST["login"]) > 30){
    header('Refresh: 5; url=index.php'); //перенаправление
    echo "Login must be longer than 3 characters and shorter than 30. After 5 seconds you will be automatically redirected to re-enter data";
}else {file_put_contents('users.txt', 'Login:' . $_POST["login"] . ",password:" . md5($_POST["password"]) .
    ",e-mail:" . $_POST["email"] . PHP_EOL, FILE_APPEND);
    echo "Your data has been successfully sent to the server";} //хеширую не логин, а пароль





?>
