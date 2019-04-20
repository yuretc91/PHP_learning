<?php
function authorization($toggle){
    if ($toggle == "sign"){
        signIn($_POST["login"], md5($_POST["password"]), $_POST["email"]);
    }else registration($_POST["login"], md5($_POST["password"]), $_POST["email"], "uploads/" . $_POST["login"] . ".jpg");
}

function registration($userLogin, $userPass, $userEmail, $userAvatar){
    include "dbOpen.php";  //подключаем БД
    $query = "SELECT * FROM users";
    $insert = "INSERT INTO users (login,password,email,avatar) VALUES ('{$userLogin}', '{$userPass}', '{$userEmail}', '{$userAvatar}')";
    $rezult = mysqli_query($connection, $query);
    //$usersList = file("users.txt");
    if (!file_exists("uploads")){            //создаём каталог с аватарами, если его нет
        mkdir("uploads", 0777);
    }
    move_uploaded_file($_FILES["avatar"]["tmp_name"], $userAvatar);              //загружаем аватар
    if ($userLogin == "" || $userPass == "" || $userEmail == ""){                                                  //проверяем на пустые input
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Fill in all form fields. After 5 seconds you will be automatically redirected to re-enter data";
    }elseif (strlen($userLogin) < 3 || strlen($userLogin) > 30){
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Login must be longer than 3 characters and shorter than 30. After 5 seconds you will be automatically redirected to re-enter data";
    }else {

        if (!$rezult){
            die("Запрос не удался - " . mysqli_error());
        }



        foreach ($rezult as $user){
            $usersLogins[] = $user["login"];
            $usersPasswords[] = $user["password"];
        }
        if (!$rezult){
            die("Запрос не удался - " . mysqli_error());
        }

        if(in_array($userLogin, $usersLogins)){
            //header('Refresh: 5; url=index.php'); //перенаправление
            echo "User with this name is already registered. After 5 seconds you will be automatically redirected to re-enter data";
        }else {
            mysqli_query($connection, $insert);
            echo "Your data has been successfully sent to the server<br>";
        }
   }
}


function signIn($userLogin, $userPass){
    include "dbOpen.php";  //подключаем БД
    $query = "SELECT * FROM users";
    $rezult = mysqli_query($connection, $query);
    foreach ($rezult as $user){
        $usersLogins[] = $user["login"];
        $usersEmails[] = $user["email"];
        $usersPasswords[] = $user["password"];

    }
    if (!$rezult){
        die("Запрос не удался - " . mysqli_error());
    }

    if ($userLogin == "" || $userPass == ""){
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Fill in all form fields. After 5 seconds you will be automatically redirected to re-enter data";
    }else {

        for ($i = 0; $i < count($usersLogins); $i++){                       //проверяем, есть ли введённый логин в базе
            if ($usersLogins[$i] == $userLogin){
                if ($usersPasswords[$i] == $userPass){                 //если есть, проверяем правильность пароля
                    include "signIn.php";
                    die();
                }else {
                    //header('Refresh: 5; url=index.php');//перенаправление
                    die("Incorrect password. After 5 seconds you will be automatically redirected to re-enter data");
                }

            }

        }
        echo "User with this login not found";

    }
}


authorization($_POST["authentication"]);
?>
