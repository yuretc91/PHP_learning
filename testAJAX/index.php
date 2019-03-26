<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            background: #57a2f8;
            font-family: "segoe ui light", sans-serif;
            font-size: 32px;
        }

        #btnForm{
            width: 200px;
            height: 50px;
            border: none;
            border-radius: 20px;
            background: crimson;
            color: beige;
            text-align: center;
            font-size: 2rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div>

    <p>My name is <span id="namePlace"></span></p>
    <input type="text" id="name">


</div>












<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function change() {

        var res = document.getElementById("name").value;

        document.getElementById("namePlace").innerHTML = res;

    }
</script>

</body>
</html>