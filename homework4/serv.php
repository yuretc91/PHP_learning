<?php
/*$login = $_POST['login'];
$password = $_POST['password'];
if (strlen($login) < 3){
    echo "Enter login longer than 3 characters";
} elseif (strlen($login) > 30){
    echo "Enter login shorter than 30 characters";
} else echo "Your login " . $login;*/

/*$login = explode(" ", $_POST['loginPassEmail'])[0];
$password = explode(" ", $_POST['loginPassEmail'])[1];
$email = explode(" ", $_POST['loginPassEmail'])[2];*/
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
if (strlen($login) < 3 || strlen($login) > 30){
    echo "Enter login longer than 3 characters and shorter than 30 characters";
} elseif(strlen($login) == 0 || strlen($password) == 0 || strlen($email) == 0) {
    echo "fill in all form fields";
}else echo "Your login " . $login . "<br>Your password " . $password . "<br>Your email " . $email;


?>