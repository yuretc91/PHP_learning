<?php
/*$login = $_POST['name'];

$tmp = include 'dddd.php';


echo json_encode($login);*/
$btn = $_POST['btn'];
$permanent = file_get_contents("permanent.php");

$shugaring = file_get_contents("shugaring.php");
if ($_POST['btn'] == "Татуаж"){
    echo $permanent;
}elseif ($_POST['btn'] == "Шугаринг"){
    echo $shugaring;
}elseif ($_POST['btn'] == "Прокол ушей"){
    echo "news";
}elseif ($_POST['btn'] == "Контакты"){
    echo "blabla";
}

?>
