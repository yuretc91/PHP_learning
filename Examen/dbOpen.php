<?php

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'examen'
);

if(!$connection) {
    echo "Подключение к БД не успешно";
}


?>