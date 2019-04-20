
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
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="authentication" class="custom-control-input" id="registration" value="reg" onclick="disableInput(this)">
                <label class="custom-control-label" for="registration">Registration</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="authentication" class="custom-control-input" id="signIn" value="sign" onclick="disableInput(this)" checked>
                <label class="custom-control-label" for="signIn">Sign in</label>
                </div>
                <input type="text" name="login" class="form-control mb-3" placeholder="login">
                <input type="password" name="password" class="form-control mb-3" placeholder="password" id="pass" >
                <input type="email" name="email" class="form-control mb-3" placeholder="email" id="email">
                <input type="file" name="avatar" class="form-control mb-3" id="avatar">
                <input type="submit" name="submit" class="btn btn-block btn-primary" id="btn">
            </form>

        </div>
    </div>
</div>
<?php







?>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
    document.getElementById('email').disabled = true;
    document.getElementById('avatar').disabled = true;

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

