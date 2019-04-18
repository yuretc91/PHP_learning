<?php
session_start();

$birthday = $_SESSION["day"] . "." . $_SESSION["month"];

if (isset($_SESSION["nowDate"])){

    echo $_SESSION["nowDate"] . "<br>";
    echo (strtotime($_SESSION["nowDate"]) - strtotime($birthday))/(3600 * 24) . "<br>";


}
echo $birthday;

//$time = strtotime("-1 day");
//$fecha = date("Y-m-d", $time);

?>
<?php
/*f(floor(($_COOKIE['birthday'] - time())/(3600*24)) == 0){
echo "Вітаємо з Днем народження!!!";
}else{
echo "До дня народження залишилось ".floor(($_COOKIE['birthday'] - time())/(3600*24))." днів";
}
}



function age($bMonth,$bDay,$bYear) {

    $cMonth = date('n');
    $cDay = date('j');
    $cYear = date('Y');

    if(($cMonth >= $bMonth && $cDay >= $bDay) || ($cMonth > $bMonth)) {
        return ($cYear - $bYear);
    } else {
        return ($cYear - $bYear - 1);
    }
}

.
© Copyright 2008-2019 by KDG



Rambler's Top100
*/

?>


