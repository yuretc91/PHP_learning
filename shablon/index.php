<?php

include "function.php";

$title = 'Главная страница';
$names = ['Alex', 'Misha', 'Kolia'];

$content = renderTemplate('index.php', [
    'title' => $title,
    'names' => $names
]);

print($content);