<?php
header("Content-Type: text/html; charset=utf-8");
ini_set('display_errors',true);
error_reporting(E_ALL);

//--------------------------------TASK 1: Утро, день, вечер.
/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/
$hour = (int)strftime('%H');
$welcome = '';// Инициализируем переменную для приветствия

if ($hour > 0 && $hour < 6) {
    $welcome = 'Доброй ночи';
} elseif ($hour >= 6 && $hour < 12) {
    $welcome = 'Доброе утро';
} elseif ($hour >= 12 && $hour < 18) {
    $welcome = 'Добрый день';
} elseif ($hour >= 18 && $hour < 23) {
    $welcome = 'Добрый вечер';
} else  {
    $welcome = 'Добрый день';
}

//--------------------------------TASK 2: Меню сайта.
$leftMenu = array(
    'home'=>'index.php', 
    'about'=>'about.php', 
    'contacts'=>'contact.php',
    'table'=>'table.php',
    'calc'=>'calc.php'
    );
    

//--------------------------------TASK 3: День недели.
$day = date('N');
//$day = 7; // раскомментировать для проверки default.

switch ($day) {
    case '6':
    case '7':
        $result3 = 'выходной';
        break;
    default:
    $result3 = 'рабочий';
        break;
}
//echo 'Если сейчас '.$day.'-й день недели, значит сегодня '.$result3;


//--------------------------------TASK 4: Формулы, часть 1.
$x4=6; //Исходное число
$y4=7; //Исходное число

//part 4.1 - Дано натуральное числа. Найдите остатки от деления этих чисел на 3 и на 5. 
$z4=3; //Делитель
$e4=5; //Делитель

$result4_1 = $x4%$z4;
$result4_2 = $x4%$e4;
$result4_3 = $y4%$z4;
$result4_4 = $y4%$e4;
//echo $result4_1."<br>";
//echo $result4_2."<br>";
//echo $result4_3."<br>";
//echo $result4_4."<br>";

//part 4.2 - Дано число. Увеличьте его на 30%, на 120%. 
$proc1 = 30; //процент числа
$proc2 = 120; //процент числа

$result4_5 = ($y4/100*$proc1)+$y4;
$result4_6 = ($y4/100*$proc2)+$y4;
//echo $result4_5."<br>";
//echo $result4_6."<br>";

//part 4.3 - Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа.
$proc3 = 40; //процент числа
$proc4 = 84; //процент числа

$result4_7 = ($x4/100*$proc3)+($y4/100*$proc4);
//echo $result4_7."<br>";

//--------------------------------TASK 5: Формулы, ч.2
echo "<h1>Task 5: Формулы, ч.2</h1>";
echo 'Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30.'."<br>";
$x5=9;
if ($x5 >10){
    $result5_1 = $x5+100;
} else {
    $result5_1 = $x5-30;
}
echo 'Число = '.$x5.'; '.'Результат = '.$result5_1.'.';
echo "<br>";
echo "<br>";


echo 'Дано натуральное число.Если оно четное,то уменьшите его в 2 раза, иначе увеличьте в 3 раза.'."<br>";
if (fmod($x5,2)==0) {
    $result5_2 = $x5/2;
} else {
    $result5_2 = $x5*3;
}
echo 'Число = '.$x5.'; '.'Результат = '.$result5_2.'.';
echo "<br>";
echo "<br>";


echo 'Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка".'."<br>"; 
if ($x5>50){
    $result5_3 = pow ($x5,2);
} elseif ($x5>10 && $x5<30) {
    $result5_3 = 0;
} else {
    $result5_3 = 'Ошибка';
}
echo 'Число = '.$x5.'; '.'Результат = '.$result5_3.'.';
echo "<br>";
echo "<br>";


echo 'Дано два числа. Вывести наибольшее из них.'."<br>";
$y5 = 6;
$z5 = 5;

echo 'Сравниваемые числа '.$y5.' и '.$z5.'; ';
switch ($y5) {
    case $y5>$z5:
        echo 'Большее число = '.$y5."<br>";
        break;
    default:
        echo 'Большее число = '.$z5."<br>";
        break;
}
echo "<br>";


echo 'Дано два числа. Вывести \'Да\', если они отличаются на 100, иначе вывести \'Нет\'.'."<br>";

$y5 = 106;
$z5 = 5;

echo 'Первое число = '.$y5.'; Второе число '.$z5.'; Есть разница в 100? Ответ: ';
if (($y5-$z5==100) || ($z5-$y5==100)) {
    echo 'Да';
} else {
    echo 'Нет';
}
echo "<br>";
echo "<br>";


echo 'Дано два числа. Вывести \'Да\', если они отличаются не более чем на 20, иначе вывести \'Нет\'.'."<br>";
$y5 = 20;
$z5 = 41;

echo 'Первое число = '.$y5.'; Второе число '.$z5.'; Есть разница больше чем 20? Ответ: ';
if (($y5-$z5>20) || ($z5-$y5>20)) {
    echo 'Да';
} else {
    echo 'Нет';
}
echo "<br>";
echo "<br>";


echo 'Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово \'Ошибка\', если месяца с таким номером не существует.'."<br>";
$month = date('n');

switch ($month) {
    case '1':
    case '2':
    case '12':
        $result3 = 'зима';
        break;
    case '3':
    case '4':
    case '5':
        $result3 = 'весна';
        break;
    case '6':
    case '7':
    case '8':
        $result3 = 'лето';
        break;
    case '9':
    case '10':
    case '11':
        $result3 = 'осень';
        break;
    default:
    $result3 = 'Ошибка';
        break;
}
echo 'Если номер месяца равен '.$month.' - значит сейчас '.$result3.'.'."<br>";
echo "<br>";


echo 'Вычислите значение выражения (в коде). Перед вычислением проверить корректность значений переменных.'."<br>";

$x5 = 6.4;
$y5 = 9.6;

if ((is_float($x5)==true || is_int($x5) == true) && (is_float($y5)==true || is_int($y5) == true)) {
    $result5_4 = ((pow ($x5,2)-4)*sqrt ($y5-1)) / (sin(2*$x5) + abs($x5));
    echo 'Результат: '.$result5_4;
} else {
    echo 'Fail';
}
echo "<br>";
echo "<br>";


//--------------------------------TASK 7: Определяем среднее число из трех.
$a7 = 56;
$b7 = 2043;
$c7 = 324;

if ($a7 > $b7 && $a7 < $c7) {
    $result7 = $a7;
}
elseif ($a7 < $b7 && $a7 > $c7) {
    $result7 = $a7;
}
elseif ($b7 < $a7 && $b7 > $c7) {
    $result7 = $b7;
}
elseif ($b7 > $a7 && $b7 < $c7) {
    $result7 = $b7;
}
elseif ($c7 < $b7 && $c7 > $a7) {
    $result7 = $c7;;
}
elseif ($c7 > $b7 && $c7 < $a7) {
    $result7 = $c7;
}
else {
    printf ('fail');
}
//echo 'Число '."$result7".' - среднее';

//--------------------------------TASK *1: Переворот строки
// создать произвольную строку из одного или двух слов и выполнить её переворот (поменять все символы местами в словах).
echo "<h1>Task *1: Переворот строки.</h1>";
mb_internal_encoding("UTF-8"); 
mb_http_output("UTF-8"); 
mb_http_input("UTF-8"); 
mb_regex_encoding("UTF-8");
//можно испольозвать strrev () или:
(string)$string_p = 'строка';
$str = mb_convert_encoding($string_p, "UTF-8");
$arr1 = str_split($str);
krsort($arr1);
$arr2 = array ();
echo 'Исходная строка: '.$str.'. Результат переворота строки: ';
for ($i = count($arr1)-1; $i >= 0; $i--) {
    array_push($arr2,$arr1[$i]) ; // выводим значения элементов массива в обратном порядке в браузер
};
$res1 = implode($arr2);
$charset  = mb_detect_encoding ($res1, array("UTF-8","ASCII","ISO-8859-1", "ISO-8859-2", "ISO-8859-3", "ISO-8859-4", "ISO-8859-5", "ISO-8859-6", "ISO-8859-7", "ISO-8859-8", "ISO-8859-9", "ISO-8859-10", "ISO-8859-13", "ISO-8859-14", "ISO-8859-15", "ISO-8859-16", "Windows-1251", "Windows-1252", "Windows-1254"));
echo $charset;
echo "<br>";
echo iconv($charset,"UTF-8",$res1);
echo "<br>";

//--------------------------------TASK *2: Число из десятичной системы в двоичную
$int11 = 10; //исходное число
$int1 = $int11; //переменная для рассчетов
$stack = array();

if (fmod($int1,2)==0) { // определяем целое число или дробное
//    echo 'Число в десятичной системе: '."$int1"."<br>";
//   echo 'В двоичной, проверка: '.decbin($int1)."<br>";
    while ($int1>0){
        $n1 = intval($int1/2); // пошагово делим исходное целое число на 2
        array_push($stack,fmod ($int1, 2)); // определяем бинарный код по наличию остатка от деления и пишем результат в массив
        $int1 = $n1;
    }
//echo 'В двоичной, результат: '; 
//    for ($i = count($stack)-1; $i >= 0; $i--) {
//        echo (int)$stack[$i]; // выводим значения элементов массива в обратном порядке в браузер
//        }
//        echo "<br>"."Число элементов массива: ".count($stack); // число элементов массива для проверки
} else {
    echo 'Введите целое число';
}

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Task 1: Утро, день, вечер</h1>
        <table border="1" cellspacing="0" width="40%" cellpadding="5">
            <tr>
                <td><?php echo $welcome?>, Гость!</td>
            </tr>
        </table>
        <h1>Task 2: Меню сайта</h1>
        <table border="1" cellspacing="0" width="40%" cellpadding="5">
            <tr>
                <td><a href='<?= $leftMenu['home']?>'>Домой</a></td>
                <td><a href='<?= $leftMenu['about']?>'>О нас</a></td>
                <td><a href='<?= $leftMenu['contacts']?>'>Контакты</a></td>
                <td><a href='<?= $leftMenu['table']?>'>Каталог</a></td>
                <td><a href='<?= $leftMenu['calc']?>'>Калькулятор</a></td>
            </tr>
        </table>
        <br>
        <h1>Task 3: День недели</h1>
        <table border="1" cellspacing="0" width="40%" cellpadding="5">
            <tr>
                <td><?php echo 'Если сейчас '.$day.'-й день недели, значит он '.$result3.'.';?></td>
            </tr>
        </table>
        <h1>Task 4: Формулы ч.1</h1>
        <table border="1" cellspacing="0" width="40%" cellpadding="5">
            <tr>
                <td>Натуральное число</td>
                <td>Делитель</td>
                <td>Остаток деления</td>
            </tr>
            <tr>
                <td><?php echo $x4?></td>
                <td><?php echo $z4?></td>
                <td><?php echo $result4_1?></td>
            </tr>
            <tr>
                <td><?php echo $x4?></td>
                <td><?php echo $e4?></td>
                <td><?php echo $result4_2?></td>
            </tr>
            <tr>
                <td><?php echo $y4?></td>
                <td><?php echo $z4?></td>
                <td><?php echo $result4_3?></td>
            </tr>
            <tr>
                <td><?php echo $y4?></td>
                <td><?php echo $z4?></td>
                <td><?php echo $result4_4?></td>
            </tr>
        </table>
        <br>
        <table border="1" cellspacing="0" width="40%" cellpadding="5">
            <tr>
                <td>Число</td>
                <td>добавить к числу, %</td>
                <td>Результат</td>
            </tr>
            <tr>
                <td><?php echo $y4?></td>
                <td><?php echo $proc1?></td>
                <td><?php echo $result4_5?></td>
            </tr>
            <tr>
                <td><?php echo $y4?></td>
                <td><?php echo $proc2?></td>
                <td><?php echo $result4_6?></td>
            </tr>
        </table>
        <br>
        <table border="1" cellspacing="0" width="40%" cellpadding="5">
            <tr>
                <td><?php echo 'Сумма '.$proc3.'% от '.$x4.' и '.$proc4.'% от '.$y4.' равна '.$result4_7.'.';?></td>
        </table>
        <h1>Task 6: таблица сравнения типов данных</h1>
        <table border="1" cellspacing="0" width="50%" cellpadding="5">
            <tr>
                <td>Значение</td>
                <td>gettype(x)</td>
                <td>empty(x)</td>
                <td>isset(x)</td>
                <td>if(X)</td>
            </tr>
            <?php $x = "";?>
            <tr>
                <td>$x=""</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = null;?>
            <tr>
                <td>$x=null;</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x;?>
            <tr>
                <td>$x неопределена;</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = array();?>
            <tr>
                <td>$x=array();</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = false;?>
            <tr>
                <td>$x=false;</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = true;?>
            <tr>
                <td>$x=true;</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = 1;?>
            <tr>
                <td>$x=1;</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = 42;?>
            <tr>
                <td>$x=42;</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = 0;?>
            <tr>
                <td>$x=0;</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = -1;?>
            <tr>
                <td>$x=-1;</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = "1";?>
            <tr>
                <td>$x="1";</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = "0";?>
            <tr>
                <td>$x="0";</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = "-1";?>
            <tr>
                <td>$x="-1";</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = "php";?>
            <tr>
                <td>$x="php";</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = "true";?>
            <tr>
                <td>$x="true";</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
            <?php $x = "false";?>
            <tr>
                <td>$x="false";</td>
                <td><?php echo gettype($x)?></td>
                <td><?php if (empty($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if (isset($x)) {echo 'true';} else {echo 'folse';}?></td>
                <td><?php if ($x) {echo 'true';} else {echo 'folse';}?></td>
            </tr>
        </table>

        <h1>Task 7: найти среднее число</h1>
        <table border="1" cellspacing="0" width="40%" cellpadding="5">
            <tr>
                <td><?php echo 'Дано: '."$a7".', '."$b7".', '."$c7";?></td>
            </tr>
            <tr>
                <td><?php echo 'Число '."$result7".' - среднее';?></td>
            </tr>
        </table>
        <h1>Task *2: Число из десятичной системы в двоичную</h1>
        <table border="1" cellspacing="0" width="50%" cellpadding="5">
            <tr>
                <td>Число в десятичной системе</td>
                <td>В двоичной, проверка</td>
                <td>В двоичной, результат</td>
            </tr>
            <tr>
                <td><?php echo "$int11";?></td>
                <td><?php echo decbin($int11)?></td>
                <td><?php for ($i = count($stack)-1; $i >= 0; $i--) {echo (int)$stack[$i];}?></td>
            </tr>
        </table>
    </body>
</html>



