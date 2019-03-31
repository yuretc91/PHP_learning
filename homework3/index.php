<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-size: 2rem;
        }
    </style>
</head>
<body>
<?php

/*1. Задание 1 (Самостоятельная работа)
Создать переменную с произвольным текстом (длиной >10символов). Провести проверку: если длина
строки больше 10 символов, обрезать строку до 10 символов. С помощью функции заменить все символы
"a-g" на пустоту.*/

/*$someText = "Lorem ipsum dolor sit amet.";
if(strlen($someText) > 10){
    $newText = substr($someText, 0, 10);
    echo $newText . "<br>";
}
echo $newReplaceText = str_replace(["a", "b", "c", "d", "e", "f", "g"], " ", $someText);*/








/*2. Задание 2 (Самостоятельная работа)

Задание:
Взять Html разметку:
" <div class="refnamediv">
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
<span class="dc-title">Любой текст</span></p>
</div>";
Удалить все html теги. Вывести количество символом после фильтрации.*/

/*$htmlText = " <div class=\"refnamediv\">
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p><p class=\"refpurpose\"><span class=\"refname\">htmlspecialchars</span> —
<span class=\"dc-title\">Любой текст</span></p>
</div>";
$textWithoutHtml = strip_tags($htmlText);
echo $textWithoutHtml . "<br>";
echo "Text length with HTML " . strlen($htmlText) . " characters, text length without HTML " . strlen($textWithoutHtml) . " characters";*/








//3. Найти и заменить в строке "http://example.com/user/username" user на author; Вывести результат на экран

/*$urlText = "http://example.com/user/username";
echo str_replace("user", "author", $urlText);*/






//5. Преобразовать строку "Find me and say Hello Mike!" в массив;
/*$someStr = "Find me and say Hello Mike!";
print_r($arr = explode(" ",$someStr));*/







//6. Посчитать, сколько букв "a" встречается в строке "Find me and say Hello Mike!";
//echo substr_count("Find me and say Hello Mike!", "a", 0);






//7. Дан урл "http://example.com/name=Mike&lastname=Jackson&age=25", необходимо разбить и вытащить параметры и вывести на экран.
/*$urlStr = "http://example.com/name=Mike&lastname=Jackson&age=25";
parse_str(str_replace("http://example.com/", "", $urlStr), $output);
print_r($output);*/







//4. Отсортировать массивам [1,22,45,3,23,45,6,76,55,4] по возврстанию *;
$arrOfNumber = [1,22,45,3,23,45,6,76,55,4];
$sortArr = sort($arrOfNumber);
foreach ($arrOfNumber as $value){
    echo $value . "<br>";
}





?>







</body>
</html>