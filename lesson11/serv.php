<?php 
//$login = $_POST["login"];
//$email = $_POST["email"];

//echo "Registration complete<br>Your login " . $login . "<br>Your email " . $email;


/*
function setInput($type, $name, $value){
    return "<input type='{$type}' name='{$name}' placeholder='{$value}'";
}


*/?><!--
<form action="">
    <?php
/*    echo setInput($_POST["type"], $_POST["name"], $_POST["value"]);
    */?>
</form>-->


<?php
//echo $_GET["page"];
if ($_GET["page"] == "1"){
    echo "Main page";
}elseif ($_GET["page"] == 2){
    echo "Contacts";
}elseif ($_GET["page"] == 3){
    echo "news";
}

?>
