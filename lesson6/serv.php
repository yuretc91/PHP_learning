<?php 
/*if(isset($_POST["submit"])){

    $name = strip_tags($_POST["name"]);
    $age = strip_tags($_POST["age"]);
    if ($name == ""){
        echo "Поле 'name' обязательно для заполнения";
    }else echo $name . " is " . $age . " years old";

} else echo "доступ по прямой ссылке запрещен";*/

/*$name = strip_tags($_GET["someData"]);
print_r($name) ;*/

//$checkbox = $_POST["checkbox"];
//$name = strip_tags($_POST["name"]);
/*if ($checkbox == "check"){
    echo "Hello, ". $name;
}else echo "Good bye, " . $name;*/

/*$skills = $_POST["skills"];

echo "Dear, " . $name . ", your skills: <br>";
foreach ($skills as $value){
    echo $value . "<br>";
}*/
/*$skills = $_POST["skills"];
if ($skills == "yes"){
    echo "All right, " . $name . ", you know PHP";
    die();
}echo "It's bad, " . $name . ", you don't know PHP";*/
/*$test = $_POST["test"];
$hiddenInput = $_POST["hiddenInput"];*/

/*function cmp($test, $arg){
    if ($test == "1"){
        echo "checkbox was checked <br>" . $test;
    }else echo "checkbox wasn't checked <br>" . $arg;
}*/
//cmp($test, $hiddenInput);




/*15.	Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea).
Выведите эти данные на экран.
Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.*/

/*$name = strip_tags($_POST["name"]);
$age = strip_tags($_POST["age"]);
$message = strip_tags($_POST["message"]);
echo "Your name is " . $name . "<br>";
echo "You're " . $age . " years old<br>";
echo "Your message: " . $message . "<br>";*/





/*17.	Спросите у пользователя логин и пароль (в браузере должен быть звездочками).
Сравните их с логином $login и паролем $pass, хранящихся в файле.
Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'.
Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.*/


$rightLogin = "21232f297a57a5a743894a0e4a801fc3";
$rightPassword = "827ccb0eea8a706c4c34a16891f84e7b";
function authentication($log, $passw){
    $login = trim(strip_tags($_POST["login"]), " ");
    $pass = trim(strip_tags($_POST["pass"]), " ");
    if(md5($login) == $log && md5($pass) == $passw){
        echo "Welcome";
    }else echo "Try again";
}
authentication($rightLogin, $rightPassword);

?>