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
$test = $_POST["test"];
$hiddenInput = $_POST["hiddenInput"];

function cmp($test, $arg){
    if ($test == "1"){
        echo "checkbox was checked <br>" . $test;
    }else echo "checkbox wasn't checked <br>" . $arg;
}

cmp($test, $hiddenInput);

?>