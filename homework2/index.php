<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #btnForm{
            width: 200px;
            height: 50px;
            border: none;
            border-radius: 20px;
            background: crimson;
            color: beige;
            text-align: center;
            font-size: 2rem;
            font-family: "segoe ui light";
            font-weight: 600;
        }
    </style>
</head>
<body>
<?php
//Теория:
//1. http://php.net/manual/ru/language.control-structures.php
//2. Презентация
//3. https://slides.com/alex_novikov/deck-10#/
//
//Практика:


//6. Задача. Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru',
//то в переменную $arr запишем массив дней недели на русском языке, а если имеет значение 'en' – то на английском.
//Решите задачу через 2 if, через switch-case.
//7. Заполните массив следующим образом: в первый элемент запишите 'x', во второй 'xx', в третий 'xxx' и так далее.
//8. Дан массив с числами. Узнайте сколько элементов с начала массива надо сложить, чтобы в сумме получилось больше 10-ти.
//Считайте, что в массиве есть нужное количество элементов
//1. При помощи цикла for выведите все нечетные числа от 1 до 50;
/*for($num = 1; $num <= 50; $num++){
    if($num%2 == 0){
        echo $num . "<br>";
    }
}*/




//2. При помощи цикла while вывести список категорий. Результат Категория 1, Категория 2, и т.д.;
/*$numberOfCategory = 5;
$categoryCount = 1;
while($categoryCount <= $numberOfCategory){
    echo "Category " . $categoryCount++ . "<br>";
}*/



//3. Написать скрипт, который выведет Заголовок, Дату и Имя автора, Картину поста (цикл while);

    /*$socialNetworks = [
        $inst = [
            "name" => "Instagram",
            "author" => "Kevin Systrom",
            "date" => "6/10/2010",
            "url" => "https://www.instagram.com/?hl=ru"
        ],
        $fb = [
            "name" => "Facebook",
            "author" => "Mark Elliot Zuckerberg",
            "date" => "4/02/2004",
            "url" => "https://www.facebook.com"
        ],
        $vk = [
            "name" => "Vkontakte",
            "author" => "Pavel Durov",
            "date" => "10/10/2006",
            "url" => "https://vk.com"
        ]
    ];
    foreach ($socialNetworks as $network){
        foreach ($network as $key => $value){
            echo $key . " - " . $value . "<br>";
        }
        echo "<br>";
    }*/



//4. При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д.;
/*$numberOfCategory = 5;

for ($categoryCount = 1; $categoryCount <= $numberOfCategory; $categoryCount++){
    echo "Category " . $categoryCount . "<br>";
}*/
?>


<!--5. Написать скрипт вывода формы, в котором задействовать подключение конструкци require_once;-->
<div id="btnForm">
    Open a form
</div>
<?php
require_once "form.php";
?>








</body>
</html>