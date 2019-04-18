<?php

if (!file_exists("uploads")){
    mkdir("uploads", 0777);
}


move_uploaded_file($_FILES["avatar"]["tmp_name"], "uploads/" . $_FILES["avatar"]["name"]);



function authorization($userLogin, $userPass, $userEmail){
    $usersList = file("users.txt");

    function userSearch($userData, $servData){
        if ($userData == $servData){
            return true;
        }
    };

    userSearch("wfw", "wfwfw");

    if ($userLogin == "" || $userPass == "" || $userEmail == ""){
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Fill in all form fields. After 5 seconds you will be automatically redirected to re-enter data";
    }elseif (strlen($userLogin) < 3 || strlen($userLogin) > 30){
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Login must be longer than 3 characters and shorter than 30. After 5 seconds you will be automatically redirected to re-enter data";
    }else {

        foreach ($usersList as $user) {
            $usersName[] = array("login" => explode("%", $user)[1], "password" => explode("%", $user)[2], "email" => explode("%", $user)[3], "avatar" => explode("%", $user)[4]);

            //echo explode("%", $user)[1] . "<br>";
            //echo explode("%", $user)[2] . "<br>";
            //echo explode("%", $user)[3] . "<br>";
            //echo "<pre>";
            //print_r($usersName);
            //echo "</pre>";
        }
        $toggle = function userSearch ($arrOfUsers, $userLog){
                    foreach ($arrOfUsers as $key => $value){
                        if ($key == "login" && $value == $userLog){
                            echo "User with this name is already registered.";
                            return true;
                        }
                    }
                    file_put_contents('users.txt', "%" . $userLogin . "%" . md5($userPass) . "%" . $userEmail . "%uploads/" . $_FILES["avatar"]["name"] . PHP_EOL, FILE_APPEND);
                    echo "Your data has been successfully sent to the server<br>";
                    //return false;
        };
        //userSearch($usersName, $userLogin);
        if ($toggle) {
            echo "User with this name is already registered.";
        } else {
            file_put_contents('users.txt', "%" . $userLogin . "%" . md5($userPass) . "%" . $userEmail . "%uploads/" . $_FILES["avatar"]["name"] . PHP_EOL, FILE_APPEND);
            echo "Your data has been successfully sent to the server<br>";
        }



    }
}

authorization($_POST["login"], $_POST["password"], $_POST["email"]);

?>
