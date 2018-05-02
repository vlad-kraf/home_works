<?php
header("Content-Type: text/html; charset=utf-8");
ini_set('display_errors',true);
error_reporting(E_ALL);
//--------------------------------TASK *1: Переворот строки
// создать произвольную строку из одного или двух слов и выполнить её переворот (поменять все символы местами в словах).

echo "<h1>Task *1: Переворот строки вар 1.</h1>";
(string)$string_p = 'строка';
$str = mb_convert_encoding($string_p, "UTF-8");
$arr1 = str_split($str);
krsort($arr1);
$arr2 = array ();
echo 'Исходная строка: '.$string_p.'. Результат переворота строки: ';
for ($i = count($arr1)-1; $i >= 0; $i--) {
    array_push($arr2,$arr1[$i]) ; // выводим значения элементов массива в обратном порядке в браузер
};
$res1 = implode($arr2);
echo mb_substr($res1,0);
echo "<br>";
echo "<br>";


echo "<h1>Task *1: Переворот строки вар 2.</h1>";
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


