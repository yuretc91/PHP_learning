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
  /*1.	Создайте переменную $var и присвойте ей значение 'hello'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h',
символ 'e', символ 'o'.*/
    /*$var = "Hello";
    echo $var[0] . "<br>";
    echo $var[1] . "<br>";
    echo $var[4] . "<br>";*/

    /*2.	Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.*/
    /*$a = 3;
    echo $a . "<br>";*/

    /*3.	Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления)*/
    /*$a = 10;
    $b = 2;
    echo "сумма - " . ($a + $b) . "<br>";
    echo "разность - " . ($a - $b) . "<br>";
    echo "произведение - " . ($a * $b) . "<br>";
    echo "частное - " . ($a / $b) . "<br>";*/

   /* 4.	Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result.
    Выведите на экран значение переменной $result.*/
   /*$c = 15;
   $d = 2;
    echo ($rezult = $c + $d);*/


    /*5.	Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c.
    Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result.
    Выведите на экран значение переменной $result.*/
    /*$a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    echo ($rezult = $c + $d);*/


    /*6.	Напишите скрипт, который считает количество секунд в часе.*/
   /* $numberOfHours = 1;
    $minutesInHours = 60;
    $secondsInMinutes = 60;
    echo "in " . $numberOfHours . " hour " . ($secondsInHour = $numberOfHours * $minutesInHours * $secondsInMinutes) . " seconds";*/



   /*7.	Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --.
Количество строк кода при этом не должно измениться. Код для переделки*/

/*$var = 1;
$var = $var + 12;
$var = $var - 14;
$var = $var * 5;
$var = $var / 7;
$var = $var + 1;
$var = $var - 1;
echo $var;
*/

/*$var  += 12;
$var  -= 14;
$var  *= 5;
$var  /= 7;
$var++;
$var--;
echo $var;*/




//8. Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'
//$age = 28;
//echo "I'm " . $age . " years old";



//9. Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
$num = "12345";
foreach (str_split($num) as $item){
    $rezult += (int)$item;
}
echo $rezult;



?>



</body>
</html>

