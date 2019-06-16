<?php

require_once 'header.php';

if (isset($_POST['submit'])) {
    $login = $_POST['login'];

    $rules = [
        'email' => 'required|valid_email',
        'login' => 'required',
    ];

    $messages = [
            'required' => 'Поле {email} не должно быть пустым'
    ];

    $gump = new GUMP('ru');
    $gump->validation_rules($rules);

    $validated_data = $gump->run($_POST);

    if (!$validated_data) {
        $errors = $gump->get_errors_array();
    } else {
        // форма прошла валидацию
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            color:red;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <input type="text" name="login" value="<?= isset($login) ? $login : ''?>">
    <p class="<?= isset($errors['login']) ? 'error' : ''?>"><?= isset($errors['login']) ? $errors['login'] : ''?></p>
    <input type="email" name="email">
    <p class="<?= isset($errors['email']) ? 'error' : ''?>"><?= isset($errors['email']) ? $errors['email'] : ''?></p>
    <input type="submit" value="Send" name="submit">
</form>
</body>
</html>

