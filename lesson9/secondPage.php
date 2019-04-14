<?php
session_start();
if (isset($_SESSION["country"]) && isset($_SESSION["userName"])){
    echo $_SESSION["userName"] . ", your country is " . $_SESSION["country"] . "<br>";
}
if (isset($_SESSION["visit_count"])){
    echo "You have updated the main page " . $_SESSION["visit_count"] . " times";
}


?>
