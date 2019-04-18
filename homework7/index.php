<?php
session_start();
?>
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
            <form action="index.php" method="post">
                <input type="text" name="name" class="form-control mb-3" placeholder="Enter name" required>
                <label>Date your birth</label>
                <div class="form-row">
                    <select class="custom-select col-4" name="day" id="day">

                    </select>
                    <select class="custom-select col-4" name="month" id="month">

                    </select>
                    <select class="custom-select col-4" name="year" id="year">

                    </select>
                </div>

                <input type="submit" name="submit" class="btn btn-block btn-primary">
            </form>
            <br>
            <a href="visitTime.php" class="btn btn-block btn-primary">Visit time</a>
            <a href="birthday.php" class="btn btn-block btn-primary">Birthday</a>
        </div>

    </div>
</div>
<?php

if (!isset($_SESSION["enterTime"])){
    $_SESSION["enterTime"] = date("H:i:s d.m.Y");
}
if (!isset($_SESSION["nowDate"])){
    $_SESSION["nowDate"] = date("d.m");
}

$_SESSION["day"] = $_POST["day"];
$_SESSION["month"] = $_POST["month"];
$_SESSION["year"] = $_POST["year"];
$_SESSION["userName"] = $_POST["name"];

?>


<?php

//1. запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.3
//2.  Спросите дату рождения пользователя. При следующем заходе на сайт напишите сколько дней осталось до его дня рождения. Если сегодня день рождения пользователя - поздравьте его!
//3. Реализуйте тест по принципу 'одна страница сайта - одна задача'. Запомните результаты ответов пользователя в сессию.
//4. Сделайте на сайте 5 картинок с товарами. Реализуйте корзину. Под каждой картинкой должна быть ссылка 'Положить в корзину'. По нажатию на эту ссылку этот товар должен занестись в корзину (сессия), также должна увеличиться общая сумма, которую должен заплатить пользователь (сумма также должна быть указана под картинками с товарами).
//5. Покажите пользователю баннер с кнопкой 'Не показывать больше!'. Если он нажмет на эту кнопку - не показывайте ему баннер в течении месяца.

?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type = "text/javascript">
    /*
        Функция injectSelect принимает объект select и ассоциативный массив.
        Select очищается, затем в него добавляются элементы option,
        значение которых устанавливают ключи массива, а текст — значения массива.
        Ничего не возвращает.
    */
    function injectSelect (sel, rowsObject) {
        var opt, x;
        sel.innerHTML = "";
        for (x in rowsObject) {
            opt = document.createElement("option");
            opt.value = x;
            opt.innerHTML = rowsObject[x];
            sel.appendChild(opt);
        }
    }
    /*
        Функция makeNumbersObject принимает два числа. Возвращает ассоциативный массив
        ряда чисел от меньшего к большему, включительно.
    */
    function makeNumbersObject (from, to) {
        var result = {}, x;
        if(from > to) { // Если from меньше to, поменять их значения друг на друга.
            var z = from;
            from = to;
            to = z;
        }
        for (x = from; x <= to; x++) {
            result[x] = x;
        }
        return result
    }
    injectSelect(document.getElementById("month"), {
        "01":"Январь", "02":"Февраль", "03":"Март", "04":"Апрель",
        "05":"Май", "06":"Июнь", "07":"Июль", "08":"Август",
        "09":"Сентябрь", "10":"Октябрь", "11":"Ноябрь", "12":"Декабрь"
    }); // Наполняем месяца
    injectSelect(document.getElementById("year"), makeNumbersObject(1920, 2012)); // Наполняем года
    injectSelect(document.getElementById("day"), makeNumbersObject(1, 31));// Наполняем дни
</script>
</body>
</html>

