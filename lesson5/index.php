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
<body>
<?php
//1. Создать функцию, которая возвращает сумму двух чисел;
//2. Создать функцию, которая выводит на экран сумму двух чисел;

/*function sum($number1, $number2){
    return $rezult = $number1 + $number2;
};
echo sum(3,6);*/




//3. Создать функцию приветствия;

/*function hello($personName){
    echo "Hello, " . $personName;
}
hello("David");*/
?>







    <?php
    //4. Сoздать функциб, которая отрисовывает таблицу умножения

    /*function tableCount($lengthTable)
    {
        $trNum = 1;
        $tdNum = 1;
        //$lengthTable = 5;
        while ($trNum <= $lengthTable) {

            echo "<tr>";

                while ($tdNum <= $lengthTable) {

                    echo "<td>";
        echo $tdNum * $trNum . "";
        echo "</td>";

                    $tdNum++;
                }
                if ($tdNum == ($lengthTable + 1)) {
                    $tdNum = 1;
                }

            echo "</tr>";

            $trNum++;
        }
    }*/



    /*function tableCount($numRows, $numCols)
    {
        for ($i = 1;$i <= $numRows; $i++) {
            echo "<tr>";
            for ($j = 1;$j <= $numCols; $j++) {
                echo "<td>";
                echo $i * $j . "";
                echo "</td>";
            }
            echo "</tr>";
        }
    }
*/?>
<!--<table>-->
    <?php
    //tableCount(7);
    //tableCount(3,5);
    ?>
<!--</table>-->



<?php
//5. ФункциЯ, принимающаЯ массив строк и выводЯщаЯ каждую строку в отдельном параграфе
//$stringArr = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
/*function writeArray($stringArr){
    foreach ($stringArr as $item){
        echo "<p>" . $item . "</p>";
    }
}
writeArray(["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]);*/







// Создать переменную, которая будет хранить значение 25.
//Взять от него синус. Результат возвести во вторую степень, используя мат. Функцию. Результат округлить и вывести на экран


?>




























<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

