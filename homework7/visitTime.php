<?php
session_start();

if (isset($_SESSION["enterTime"])){
    $timeOnline = time() - strtotime($_SESSION["enterTime"]);
    echo "You visited this site " . $timeOnline . " seconds ago";
}


?>
