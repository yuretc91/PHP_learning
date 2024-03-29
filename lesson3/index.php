<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            font-size: 2rem;
            text-align: center;
        }
        td, th {
            width: 50px;
            border: 1px solid black;
        }
        </style>
</head>
<body>

<?php

//1. Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'.
//Проверьте работу скрипта при $a, равном 1, 0, -3.

//$a = -1;
//if($a == 0){
//    echo "All right";
//}else echo "Wrong";


//5. Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'. (empty())

//$a = 5;
//if (empty($a)){
//    echo "Wrong";
//}else echo "Right";


//6. Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'.
//Проверьте работу скрипта при $a, равном 3 и null. (isset())

//$a = null;
//if(isset($a)){
//    echo "Right";
//}else echo "Wrong";



//8. Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно', иначе выведите 'Неверно'.
//Проверьте работу скрипта при $a, равном 5, 0, -3, 2.

/*$a = 5;
if($a > 0 && $a < 5){
    echo "Right";
}else echo "Wrong";*/


/*9. Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе поделите ее на 10.
Выведите новое значение переменной на экран. Проверьте работу скрипта при $a, равном 5, 0, -3, 2 *.*/

/*$a = 22;
if($a == 0 || $a == 2){
    echo ($a +=7);
}else echo ($a /=10);*/





/*13.  Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится?
    Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла).
Решите задачу сначала через цикл while, а потом через цикл for*/


//$num=1000;
/*$iterationCount = 1;
while($num >= 50){
   $num /= 2;
   $iterationCount++;
}
echo "iteration count " . $iterationCount . "<br>";*/


/*for ($iterationCount = 1; $num >= 50; $iterationCount++){
    $num /= 2;
}
echo "iteration count " . $iterationCount . "<br>";*/

    ?>


<!--Отрисовать таблицу умножения-->

<table>
    <?php
    $trNum = 1;
    $tdNum = 1;
    $tableCount = 5;
    while($trNum <= $tableCount){?>
        <tr>
            <?php
                while ($tdNum <= $tableCount){?>
                    <td><?= $tdNum * $trNum . ""; ?></td>
                <?php
                    $tdNum++;
                }
            if($tdNum == 6){
                $tdNum = 1;
            }
            ?>

        </tr>

    <?php
        $trNum++;
    }?>


</table><br>


<!--Дан массив ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'].
С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.-->
<?php
$colors = [
    "green" => "зеленый",
    "red" => "красный",
    "blue" => "голубой"
];

foreach ($colors as $key => $value){
    echo $key . " - " . $value . "<br>";
}


/*5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'.
С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля - зарплата 200 долларов.'.*/


$persons = [
        "Коля" => "200",
        "Вася" => "300",
        "Петя" => "400"
];
foreach ($persons as $key => $value){
    echo $key . " - зарплата " . $value . " долларов <br>";
}


?>

</body>
</html>

