<?php
header("Content-Type: text/html; charset=utf-8");
ini_set('display_errors',true);
error_reporting(E_ALL);

echo 'Задача 2. Используя функцию rand создать массив из 10-ти случайных чисел в диапазоне от 1 до 10, и найти сумму каждого третьего значения в массиве'."<br>";
$random_number = rand(1, 10);
$array_1 = array();
$array_2 = array();

for ($i=0; $i < 10; $i++) { 
    array_push ($array_1, rand(1, 10));
}
print_r ($array_1);
echo "<br>";

for ($i=2; $i <= count($array_1); $i=$i+3) { 
//    echo $array_1[$i];
    array_push ($array_2, $array_1[$i]);
    echo 'Каждое третье число массива: '.$array_1[$i]."<br>";
}
echo 'Сумма всех "третьих": '.array_sum($array_2);
echo "<br>";
echo "<br>";
echo "----------------------";
echo "<br>";


echo 'Задача 3.Используя функцию rand создать массив из 10-ти случайных чисел в диапазоне от 1 до 10. Генерируя случайное число, проверять функцией in_array, входит ли оно в созданный массив.'."<br>";
$random_number_3 = rand(1, 10);
$array_3 = array();

for ($i=0; $i < 10; $i++) { 
    array_push ($array_3, rand(1, 10));
}
print_r ($array_1);
echo "<br>";
if (in_array($random_number_3, $array_3)) {
    echo "Result: i found $random_number_3 in array";
} else {
    echo "Result: i did`t found enything in array";
}
echo "<br>";
echo "<br>";
echo "----------------------";
echo "<br>";

echo 'Задача 4. Используя функцию rand создать 2 массива из 20-ти случайных чисел в диапазоне от 1 до 20. После чего выполнить сравнение массивов функцией array_diff и получить массив из элементов, которых нет в массиве 2.'."<br>";

$array_4_1 = array();
$array_4_2 = array();

for ($i=0; $i < 20; $i++) { 
    array_push ($array_4_1, rand(1, 20));
    array_push ($array_4_2, rand(1, 20));
}
print_r ($array_4_1);
echo "<br>";
print_r ($array_4_2);
echo "<br>";
$result = array_diff($array_4_1, $array_4_2);
echo 'In array_4_2 doesn`t exist elements: ';
print_r($result);
echo "<br>";
echo "<br>";
echo "----------------------";
echo "<br>";

echo 'Задача 1: Сформировать шахматную доску размером 10 на 10 (используя цикл for).'."<br>";
?>



<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <table border='1'>
            <?php  
            /*Задача 1. Сформировать шахматную доску размером 10 на 10 (используя цикл for).*/ 
            $x  = 8;
            for ($i = 0; $i < $x ; $i++) { 
                for ($j = 0; $j < $x ; $j++) { 
                    if ($i %2 == 0) {
                        if ( $j%2 == 0) {
                            echo "<td bgcolor='black' width='20' height='20'></td>";
                        } else {
                            echo "<td bgcolor='white' width='20' height='20'></td>";
                        };
                    } else {
                        if ( $j%2 == 0) {
                            echo "<td bgcolor='White' width='20' height='20'></td>";
                        } else {
                            echo "<td bgcolor='black' width='20' height='20'></td>";
                        };
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>