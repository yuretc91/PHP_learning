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
                <input type="text" name="country" class="form-control mb-3" placeholder="Enter country" required>
                <input type="submit" name="submit" class="btn btn-block btn-primary">
            </form>
            <a href="secondPage.php" class="btn btn-block btn-primary">Second Page</a>
        </div>
    </div>
</div>
<?php

if (!isset($_SESSION["enterTime"])){
    $_SESSION["enterTime"] = date("H:i:s d.m.Y");
} else {
    $timeOnline = time() - strtotime($_SESSION["enterTime"]);
    echo "You visited this site " . $timeOnline . " seconds ago";
}
$visit_count = 1;
if (isset($_SESSION['visit_count'])) {
    $visit_count = $_SESSION['visit_count'] + 1;
}
$_SESSION['visit_count'] = $visit_count;
$_SESSION["country"] = $_POST["country"];
$_SESSION["userName"] = $_POST["name"];

?>


<?php

//1. по заходу на страницу запишите в сессию текст 'test'. затем обновите страницу и выведите содержимое сессии на экран.

//2. пусть у вас есть две страницы сайта. «апишите на первой странице что-нибудь в сессию, а затем выведите это при заходе на другую страницу.

//3. сделайте счетчик обновлени¤ страницы пользователем. ƒанные храните в сессии. —крипт должен выводить на экран количество обновлений. ѕри первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновл¤ли страницу.

//4. сделайте две страницы: index.php и test.php. ѕри заходе на index.php спросите с помощью формы страну пользовател¤, запишите ее в сессию (форма при этом должна отправитс¤ на эту же страницу). ѕусть затем пользователь зайдет на страницу test.php - выведите там страну пользовател¤.

//5. запишите в сессию врем¤ захода пользовател¤ на сайт. ѕри обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.

?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

