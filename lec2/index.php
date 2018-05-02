<?php
ini_set('display_errors',true);
error_reporting(E_ALL);

$products = array (
    'name' => 'tovar 1',
    'price' => 1000,
    'currency' => 'UAH'
);

// echo "<pre>";
// print_r($products);
// echo "</pre>";
// var_dump($products);

echo $products['name'];
$products['color'] = 'red';
echo $products['color'];
$products[] = 10;
$products['images'] = array(
    0 => array( 
        'img' => 'asdasd',
        'title' => 'dfasdgs'
    ),
    1 => array( 
        'img' => '345345',
        'title' => 'dgfdgf'
    ),
    2 => array( 
        'img' => 'hjkhjk',
        'title' => 'fgh'
    ),
    3 => array( 
        'img' => '56756',
        'title' => 'fgh'
    ),
);
$products[] = 345345;
$products[50] = 34546;
$products[100] = 4545;
$products[60] = 4545;
$products[] = 1111111111;
// echo "<pre>";

$num =  date('n');

// switch($num) {
//     case $num < 6:

//     case 1:
//     case 2:
//     case 12:
//         echo 'Winter';
//         break;
//     case 3:
//     case 4:
//     case 5:
//         echo 'Spring';
//         break;
//     default:
//         echo 'hello';
// }

