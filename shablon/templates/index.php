<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>

<div class="wrap" style="width: 50%;margin: 100px auto;">
    <ul>
        <?php
        foreach ($names as $name)

            echo $name . "<br>";
        ?>
    </ul>
    <a href="login.php">Авторизация</a>
</div>

</body>
</html>