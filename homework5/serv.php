<?php





function authorization($userLogin, $userPass, $userEmail){
    //$usersList = file("users.txt");


    if ($userLogin == "" || $userPass == "" || $userEmail == ""){
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Fill in all form fields. After 5 seconds you will be automatically redirected to re-enter data";
    }elseif (strlen($userLogin) < 3 || strlen($userLogin) > 30){
        header('Refresh: 5; url=index.php'); //перенаправление
        echo "Login must be longer than 3 characters and shorter than 30. After 5 seconds you will be automatically redirected to re-enter data";
    }else {


        //$userList = fopen("users.txt", "a+");
        /*while(!feof($userList))
        {
            $users[] = explode("%", fgets($userList))[0];     //работает точно также
        }
        fclose($userList);*/


        $usersList = explode("#", file_get_contents("users.txt"));
        foreach ($usersList as $users){
            $usersName[] =  explode("%", $users)[0];
        }

        /*foreach ($usersList as $user) {
            $users[] = explode("%", $user)[0];
            //$pass = explode("%", $user)[1];
            //$email = explode("%", $user)[2];
            //echo "{explode('%', $user)[0])} <br>";
        }*/



        /*foreach ($users as $key){
            echo $key . "<br>";
        }*/   //проверка


        if (in_array($userLogin, $usersName) == true) {
            echo "User with this name is already registered.";
        } else {
            file_put_contents('users.txt', $userLogin . "%" . md5($userPass) . "%" . $userEmail . "#", FILE_APPEND);
            echo "Your data has been successfully sent to the server<br>"; //хеширую пароль
        }



    }
}

authorization($_POST["login"], $_POST["password"], $_POST["email"]);

?>
