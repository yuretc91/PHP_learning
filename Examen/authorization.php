<?php
session_start();
if (isset($_SESSION['userLogin'])){
    $user_login = $_SESSION['userLogin'];
}
//ob_clean();
include 'dbOpen.php';
include "function.php";
function signIn($userLogin, $userPass){

    global $connection;
    $query = "SELECT * FROM users WHERE login = '{$userLogin}'";
    $rezult = mysqli_query($connection, $query);
    if (!$rezult){
        die("Запрос не удался - " . mysqli_error());
    }
    $row = mysqli_fetch_assoc($rezult);
    $getAdmin = "SELECT * FROM users WHERE login = 'admin'";
    $adminRezult = mysqli_query($connection, $getAdmin);
    $adminRow = mysqli_fetch_assoc($adminRezult);
    if (!$adminRezult){
        die("Запрос не удался - " . mysqli_error());
    }

    if ($userLogin == "" || $userPass == ""){
        echo "Fill in all form fields.";
    }else {

        if($userLogin == $row['login']) {
            if ($userPass == $row['password']){
                $_SESSION['userLogin'] = $userLogin;

                if ($userLogin == $adminRow['login']){
                    $_SESSION['isAdmin'] = true;
                    header("Location: admin/index.php");
                }else {
                    $_SESSION['isAdmin'] = false;
                    header("Location: index.php");
                }

            }else echo "Incorrect password";
        }else echo "User with this login not found";


    }
}

signIn($_POST["login"], $_POST["password"])
//ob_start(signIn($_POST["login"], $_POST["password"]));
//ob_get_clean();
?>