<?php
include 'dbOpen.php';
include "function.php";
$is_auth = rand(0, 1);

$user_name = 'Yura'; // укажите здесь ваше имя

$content = renderTemplate('index.php', [
    'user_name' => $user_name
]);

print($content);