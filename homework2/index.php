<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//Теория:
//1. http://php.net/manual/ru/language.control-structures.php
//2. Презентация
//3. https://slides.com/alex_novikov/deck-10#/
//
//Практика:



//4. При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д.;
//5. Написать скрипт вывода формы, в котором задействовать подключение конструкци require_once;
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
$inst = [
        "name" => "Instagram",
        "avtor" => "Kevin Systrom",
        "date" => "6/10/2010",
        "url" => "https://www.instagram.com/?hl=ru"
];
$fb = [

];

?>



</body>
</html>
