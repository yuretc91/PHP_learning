<?php

    $connection = mysqli_connect(
        'localhost',
        'root',
        '',
        'cms'
    );

    if(!$connection) {
        echo "Подключение к БД не успешно";
    }


?>