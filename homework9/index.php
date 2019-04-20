
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
<div>

</div>
<?php
function textCut($sourceText, $textLength){
    for ($i = $textLength;$i > 0;$i--){
        if ($sourceText[$i] == " "){
            break;
        }
    }
    return substr($sourceText, 0, $i);
}


$text = file_get_contents("text.txt");

//обрезаем до 500 символов
$text500 = textCut($text, 500);
echo "<p>" . $text500 . "...</p>";

//обрезаем до 300 символов
$text300 = textCut($text, 300);
echo "<p>" . $text300 . "...</p>";


//обрезаем до 250 символов
$text250 = textCut($text, 250);
echo "<p>" . $text250 . "...</p>";

//обрезаем до 100 символов
$text100 = textCut($text, 100);
echo "<p>" . $text100 . "...</p>";

/*Создать переменную, записать в нее рандомный текст на 500-1000 символов.
Сделать функцию, которая обрезает текст по словам.
Результат, красивый обрезанный текст который заканчивается полностью словом, а не обрезанным текстом.
В конце добавить многоточие*/

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

