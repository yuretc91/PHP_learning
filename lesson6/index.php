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
    .test{
        background: beige;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <!--<form action="#" method="GET">
                <input type="text" name="name" class="form-control mb-3" placeholder="name" required id="name">
                <input type="text" name="age" class="form-control mb-3" placeholder="age" required>
                <input type="submit" name="submit" class="btn btn-block btn-primary" id="btn">

            </form>
            <div class="test">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores corporis deleniti eos nostrum! Earum est minima sequi voluptas.
            </div>-->
            <form action="serv.php" method="post">
                <!--<input type="text" name="name" class="form-control mb-3" placeholder="name" required>-->
                <!--<input type="checkbox" name="checkbox" value="check">Check me!-->
                <!--Choose your skills<br>
                <select name="skills[]" id="skills" multiple>
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="PHP">PHP</option>
                    <option value="JS">JS</option>
                </select>-->
                <!--Do you know PHP?<br>
                <input type="radio" name="skills" value="yes">Yes
                <input type="radio" name="skills" value="no" checked>No-->
                <input type="checkbox" name="test" value="1"> Click me!
                <input type="hidden" name="hiddenInput" value="0">
                <input type="submit" name="submit" class="btn btn-block btn-primary">
            </form>
        </div>
    </div>
</div>

<?php


/*12.	Напишите функцию, которая создает чекбокс и сохраняет его значение после отправки.
13.	Спросите город пользователя с помощью формы. Результат запишите в переменную $city. Выведите на экран фразу 'Ваш город: %Город%'.
14.	Сделайте предыдущую задачу так, чтобы пользователь не мог вводить теги и сломать нам сайт.
15.	Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран.
Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.
16.	Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите.
Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее
17.	Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле.
Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.*/







?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script>
    $(function () {
        var test = $(".test");
        var btn = $("#btn");
        var name = $("#name");
        btn.click(function () {
            console.log(name.val());
            $.post("serv.php", {someData: name.val()}, function (data) {
                console.log(data);
                //test.text(data);
            });
        });



    });

</script>-->
</body>
</html>

