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

            <form action="serv.php" method="post" enctype="multipart/form-data">


                <input type="text" name="name" class="form-control mb-3" placeholder="Enter name" required>
                <input type="text" name="email" class="form-control mb-3" placeholder="Enter e-mail" required>
                <input type="text" name="login" class="form-control mb-3" placeholder="Enter login" required>
                <input type="text" name="tel" class="form-control mb-3" placeholder="Enter telephone" required>
                <textarea name="selfinfo" class="form-control mb-3" placeholder="Enter self info" required></textarea>
                <input type="file" name="avatar" class="form-control mb-3">

                <input type="submit" name="submit" class="btn btn-block btn-primary">
            </form>

        </div>
    </div>
</div>

<?php
//Создайте страницу создания новостей, новость должна иметь следующие поля, название новости, картинка, дата создания, имя автора, краткий текст *.

?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

