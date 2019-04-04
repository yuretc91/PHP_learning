<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    html{
        padding: 20px;
        font-size: 2rem;
    }

</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="serv.php" method="post">

                <input type="text" name="login" class="form-control mb-3" placeholder="login" required>
                <input type="text" name="password" class="form-control mb-3" placeholder="password" required>
                <input type="text" name="email" class="form-control mb-3" placeholder="email" required>
                <!--<textarea name="loginPassEmail" id="blabla" class="form-control mb-3" placeholder="login password email" required></textarea>-->
                <input type="submit" name="submit" class="btn btn-block btn-primary">
            </form>
        </div>
    </div>
</div>

<?php

/*2.1 Создать форму, в которую пользователь вносит информацию (например логин),
полученные данные вывести на экран. Сделать проверку на пустоту. Сделать проверку на длину логина не менее 3 символов.*/



/*3.1 Создать форму с текстовым полем и кнопкой submit. Поль-
зователь должен вводить в текстовое поле название логина, пароля и e-mail адреса.
При нажатии на кнопку submit, должно происходить следующие дей-
ствия:
- название логина, пароля и e-mail адреса из формы должно выводится на экран;
- проверка валидации на стороне сервера;
- логин должен быть не менее 3 символов и не более 30 символов;*/









?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

