<?php 
header("Content-Type: text/html; charset=utf-8");
ini_set('display_errors',true);
error_reporting(E_ALL);


//2. Cоздать массив из 1000 чисел каждый элемент которого равен квадрату своего номера.Результат вывести в виде таблицы (офорить ее рамкой)
function task2 () {
    $array_2 = array();
    echo '2. Cоздать массив из 1000 чисел каждый элемент которого равен квадрату своего номера.Результат вывести в виде таблицы (офорить ее рамкой)';
    echo "<table border=1 cellspacing=1 width=40% cellpadding=5>";
    echo "<tr>";
        echo "<td>".'Key'."</td>";
        echo "<td>".'num'."</td>";
    echo "</tr>";
    for ($i=0; $i < 1000; $i++) { 
        $num1 = pow($i, 2);
        array_push ($array_2, $num1);
                echo "<tr>";
                    echo "<td>".array_search($num1, $array_2)."</td>";
                    echo "<td>".$array_2[$i]."</td>";
                echo "</tr>";
    }
    echo "</table>";
}

// 3. Создайте массив из 1000 случайных чисел. Определите, есть ли в массиве повторяющиеся элементы
function task3 () {
    $array_3 = array();
    echo '3. Создайте массив из 1000 случайных чисел. Определите, есть ли в массиве повторяющиеся элементы';
    echo "<br>";
    for ($i=0; $i < 1000; $i++) {
        array_push ($array_3, rand(1, 10));
    }
    if (array_unique($array_3) != $array_3):
        echo 'Повторяющиеся элементы в массиве есть.'."<br>";
    else: echo 'Повторяющихся элементов в массиве нет.'."<br>";
    endif;
}

// 4. Создать массив из 100 случайных чисел. Найти сумму чисел, которые кратны 5-ти(пяти)
function task4 () {
    $array_4 = array();
    $array_4_1 = array();
    echo '4. Создать массив из 100 случайных чисел. Найти сумму чисел, которые кратны 5-ти(пяти)';
    echo "<br>";
    for ($i=0; $i < 100; $i++) {
        array_push ($array_4, rand(1, 10));
    }
    foreach ($array_4 as $value) {
        if ($value%5 == 0):
            array_push ($array_4_1, $value);
        endif;
    }
    echo 'Summ of elements = '.array_sum($array_4_1);
    echo "<br>";
}

//5. Дана строка. Если ее длина больше 10 символов, то оставить в строке только первые 6 символов, иначе дополнить строку символами 'o' до длины 12.
function task5 () {
echo '5. Дана строка. Если ее длина больше 10 символов, то оставить в строке только первые 6 символов, иначе дополнить строку символами \'o\' до длины 12'."<br>";
$str_5 = 'ыфв'; //Исходная строка
$str_symbol = 'o'; //добавочный символ
$str_replace = ''; //Добавочная строка
echo 'Длинна исходной строки \''.$str_5.'\' = '.mb_strlen ($str_5, $encoding = "UTF-8");
echo "<br>";

if (mb_strlen ($str_5, $encoding = "UTF-8") > 10):
    $str_5_1 = mb_substr($str_5, 0, 6, $encoding = "UTF-8"); //Результат условия 1
    echo 'оставляем первые 6 символов: '. $str_5_1."<br>";
else:
    for ($i=0; $i < (12- mb_strlen ($str_5, $encoding = "UTF-8")) ; $i++) {
        $str_replace = substr_replace ($str_replace, $str_symbol, $i); 
    }
    $str_5_1 = $str_5.$str_replace; //Результат условия 2
    echo 'Добавляем символы \'o\' в конце строки: '.$str_5_1."<br>";
endif;
echo "<br>";
}

// 6. Сгенерировать массив из 10-ти случайных чисел. После этого, сгенерировать одно случайно число и проверить, входи ли оно в данный массив.
function task6 () {
    $array_6 = array();
    $num_6 = rand(1, 100);
    echo '6. Сгенерировать массив из 10-ти случайных чисел. После этого, сгенерировать одно случайно число и проверить, входи ли оно в данный массив.';
    echo "<br>";
  
    for ($i=0; $i < 10; $i++) {
        array_push ($array_6, rand(1, 100));
    }
    print_r ($array_6);
    echo "<br>";

    if (in_array($num_6, $array_6)):
        echo 'Число '.$num_6.' в массиве есть.'."<br>";
    else: echo 'Числа '.$num_6.' в массиве нет.'."<br>";
    endif;
}

// 7. Создать массив из 100 случайных как чисел так и ключей. После этого выполнить:
//Сортировку массива по значению
//Сортировку массива по ключу.

function task7 () {
$array_7 = array();
$num_7 = rand(1, 100);
    echo '7. Создать массив из 100 случайных как чисел так и ключей. После этого выполнить: ';
    echo "<br>";
  
    for ($i=0; $i < 100; $i++) {
        array_push ($array_7, rand(1, 100));
    }
    //print_r ($array_7);
    //echo "<br>";
    echo 'Сортировку массива по значению.'."<br>";

    asort($array_7);
    foreach ($array_7 as $key => $val) {
    echo "$key = $val"."<br>";
    }
    echo "<br>";

    echo ' Сортировку массива по ключу.'."<br>";

    ksort($array_7);
    foreach ($array_7 as $key => $val) {
    echo "$key = $val"."<br>";
    }
}

// 8. Создать два массива из 10-ти случайных чисел.
// Выполнить сравнения массивов по двум критеряим: вычислить схождение массива, вычислить расхождение массива.
function task8 () {

    echo '8. Создать два массива из 10-ти случайных чисел.'."<br>";
    $array_8_1 = array();
    $array_8_2 = array();
      
        for ($i=0; $i < 10; $i++) {
            array_push ($array_8_1, rand(1, 10));
            array_push ($array_8_2, rand(1, 10));
        }

        $result_8_1 = array_intersect($array_8_1, $array_8_2);
        $result_8_2 = array_diff($array_8_1, $array_8_2);

        print_r($array_8_1);
        echo "<br>";
        print_r($array_8_2);
        echo "<br>";

        echo 'вычислить схождение массива: ';
        print_r($result_8_1);
        echo "<br>";

        echo 'вычислить расхождение массива: ';
        print_r($result_8_2);
        echo "<br>";
    }

// 9. Создать массив из 50-ти случайных чисел. Генерируя случайно число, проверять есть ли такой ключ в данном массив.
function task9 () {

    echo '9. Создать массив из 50-ти случайных чисел. Генерируя случайно число, проверять есть ли такой ключ в данном массив.'."<br>";
    $array_9 = array();
      
        for ($i=0; $i < 50; $i++) {
            $x_9 = rand(1, 10);
            array_push ($array_9, $x_9);
            if (array_key_exists ($x_9 , $array_9 )):
                echo 'Key '.$x_9.' exist in array.'."<br>";
            else:
                echo 'Key '.$x_9.' doesn`t exist in array.'."<br>";
            endif;
        }
}
    
// 10. Создать массив из 100 случайных ключей. Создать еще один массив, который будет содержать все ключи первого массива. Использовать функции php, не писать «велосипед»
function task10 () {

    echo '10. Создать массив из 100 случайных ключей. Создать еще один массив, который будет содержать все ключи первого массива. Использовать функции php, не писать «велосипед»'."<br>";
    $array_10 = array();
      
    for ($x = 1; $x < 100; $x++) //Делаем исходный массив
    {
        $array_10[rand(1, 100)] = $x;
    }
    echo 'Исходный массив'."<br>";
    asort($array_10);
    print_r($array_10);
    echo "<br>";

    echo 'Массив где значения = ключам предыдущего'."<br>";
    $flipped = array_flip($array_10); // меняем местами ключи и значения массива - получаем массив со значениями ключей первого массива. 
    print_r($flipped);
    echo "<br>";
    
}

// 11. Создать массива з 10-ти чисел. Вычислить произведение значений массива. Не использовать для решения задачи циклы.
function task11 () {

    echo '11. Создать массива з 10-ти чисел. Вычислить произведение значений массива. Не использовать для решения задачи циклы.'."<br>";
      
    $array_11 = array();
      
    for ($i=0; $i < 50; $i++) {
        array_push ($array_11, rand(1, 10));
}
print_r($array_11);
echo "<br>";
Echo 'Произведение значений массива = '. array_product($array_11).''."<br>";
}

// 12. Нарисовать треугольник и числ при помощи php.

function task12 () {
    echo '12. Нарисовать треугольник и числ при помощи php.'."<br>";
      
    for ($i=0; $i < 7; $i++) {
        for ($j=7; $j>$i; $j--){
            echo '0';
        }
        echo "<br>";
}

}






?>


<!DOCTYPE html>
<html>
    <head>
        <title>hw5</title>
    </head>
    <body>
        <?php task2()?>
        <br>
        <?php task3()?>
        <br>
        <?php task4()?>
        <br>
        <?php task5()?>
        <br>
        <?php task6()?>
        <br>
        <?php task7()?>
        <br>
        <?php task8()?>
        <br>
        <?php task9()?>
        <br>
        <?php task10()?>
        <br>
        <?php task11()?>
        <br>
        <?php task12()?>
        <br>
    </body>
</html>