<?php

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'test1'
);

$name = htmlspecialchars($_POST['name']);

$sqlInsert = "INSERT INTO users (name) VALUES ('{$name}')";

$result = mysqli_query($connection, $sqlInsert);

if (!$result) {
    echo 'ошибка в создании';
}

//$sqlSELECT = "SELECT * FROM users WHERE name = '{$name}'";
//
//$result = mysqli_query($connection, $sqlSELECT);
//
//foreach($result as $user) {
//    $userName = $user['name'];
//}

echo "Пользователь " . $name . " Успешно добавлен";



