<?php
/*session_start();
$_SESSION["login"] = $_POST["login"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["avatar"] = "uploads/" . $_POST["login"] . ".jpg";*/


function authorization($toggle){
    if ($toggle == "sign"){
        signIn($_POST["login"], $_POST["password"], $_POST["email"]);
    }else registration($_POST["login"], $_POST["password"], $_POST["email"]);
}

function registration($userLogin, $userPass, $userEmail){
    $usersList = file("users.txt");
    if (!file_exists("uploads")){            //создаём каталог с аватарами, если его нет
        mkdir("uploads", 0777);
    }
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "uploads/" . $_POST["login"] . ".jpg");              //загружаем аватар
    if ($userLogin == "" || $userPass == "" || $userEmail == ""){                                                  //проверяем на пустые input
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Fill in all form fields. After 5 seconds you will be automatically redirected to re-enter data";
    }elseif (strlen($userLogin) < 3 || strlen($userLogin) > 30){
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Login must be longer than 3 characters and shorter than 30. After 5 seconds you will be automatically redirected to re-enter data";
    }else {

        foreach ($usersList as $user) {
            $usersLogins[] = explode("%", $user)[1];
            //$usersPasswords[] = explode("%", $user)[2];
        }
        if(in_array($userLogin, $usersLogins)){
            header('Refresh: 5; url=index.php'); //перенаправление
            echo "User with this name is already registered. After 5 seconds you will be automatically redirected to re-enter data";
        }else {
            file_put_contents('users.txt', "%" . $userLogin . "%" . md5($userPass) . "%" . $userEmail . "%uploads/" . $_POST["login"] . ".jpg" . PHP_EOL, FILE_APPEND);
            echo "Your data has been successfully sent to the server<br>";
        }
    }
}


function signIn($userLogin, $userPass){
    $usersList = file("users.txt");

    if ($userLogin == "" || $userPass == ""){
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Fill in all form fields. After 5 seconds you will be automatically redirected to re-enter data";
    }else {

        foreach ($usersList as $user) {                                   //создаём массивы логинов и паролей
            $usersLogins[] = explode("%", $user)[1];
            $usersPasswords[] = explode("%", $user)[2];
            $usersEmails[] = explode("%", $user)[3];
        }

        for ($i = 0; $i < count($usersLogins); $i++){                       //проверяем, есть ли введённый логин в базе
            if ($usersLogins[$i] == $userLogin){
                if ($usersPasswords[$i] == md5($userPass)){                 //если есть, проверяем правильность пароля
                    include "signIn.php";
                    die();
                }else {
                    header('Refresh: 5; url=index.php'); //перенаправление
                    echo "Incorrect password. After 5 seconds you will be automatically redirected to re-enter data";
                    die();
                }

            }

        }
        echo "User with this login not found";
        /*if ($isUserFind) {
            echo "User with this name is already registered.";
        } else {
            file_put_contents('users.txt', "%" . $userLogin . "%" . md5($userPass) . "%" . $userEmail . "%uploads/" . $_FILES["avatar"]["name"] . PHP_EOL, FILE_APPEND);
            echo "Your data has been successfully sent to the server<br>";
        }*/
    }
}


authorization($_POST["authentication"]);
?>
