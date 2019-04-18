<?php
/*session_start();
if (isset($_SESSION["login"])){
    $usLogin = $_SESSION["login"];
}*/
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
        <div class="col-6">
            <img src="<?="uploads/" . $_POST["login"] . ".jpg"?>" alt="avatar">
        </div>
        <div class="col-6">
            Welcome, <?=$userLogin?><br>Your email:<?=$usersEmails[$i]?>
        </div>
    </div>
</div>
<?php







?>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
    document.getElementById('email').disabled = false;
    document.getElementById('avatar').disabled = false;

    function disableInput(currentRadio){
        if(currentRadio.value === 'sign'){
            document.getElementById('email').disabled = true;
            document.getElementById('avatar').disabled = true;
        }
        else{
            document.getElementById('email').disabled = false;
            document.getElementById('avatar').disabled = false;
        }

    }
</script>
</body>
</html>