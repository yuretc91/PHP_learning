<?php 

$main = $_GET["someData"];
switch ($main) {
    case 'main' :
        require_once "permanent.php";
        break;
    case 'about' :
        require_once "about.php";
        break;
}

?>

//print_r("<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet at deserunt in minus nostrum odit repudiandae sed, similique voluptate.</div>") ;

/*//$city = $_GET["someData1"];
$city = $_POST["someData1"];
//$age = $_GET["someData2"];
$age = $_POST["someData2"];
echo "You are living in ".$city." and you are ".$age." years old";*/




?>