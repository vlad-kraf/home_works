<?php
header("Content-Type: text/html; charset=utf-8");
echo "тестовая строка кирилицы";

/*Task 1 - konverter*/
$number1 = 100;

$koef_inch_to_sm = 2.54;
$koef_inch_to_m = 39.37;
$koef_miles_to_km = 1.6;
$koef_miles_to_m = 1609.34;
$koef_c_to_f = 1.8;
$koef_f_to_c = 0.555;
$koef_nm_to_km = 1.85;
$koef_km_to_sm = 100000;
$koef_foot_to_m = 0.3;
$koef_gallon_to_liter = 4.54;

$result1 = $number1*$koef_inch_to_sm;
$result2 = $number1/$koef_inch_to_m;
$result3 = $number1*$koef_miles_to_km;
$result4 = $number1*$koef_miles_to_m;
$result5 = $number1*$koef_c_to_f+32;
$result6 = ($number1-32)*$koef_f_to_c;
$result7 = $number1*$koef_nm_to_km;
$result8 = $number1*$koef_km_to_sm;
$result9 = $number1*$koef_foot_to_m;
$result10 = $number1*$koef_gallon_to_liter;

/*Task 2 - car speed*/
$s = 150; //пройденный путь в км.
$t = 2.5; //время в часах.

$koef_km_to_m = 0.277778; // 1 км/ч = 0,277 м/с.

$v = $s/$t; //Скрорость в км/ч.
$v2 = $v*$koef_km_to_m; //Скрорость в м/с.

/*Task 3 - division by modulus*/
$a = 10;
$b = 3;

$c = $a%$b;

/*Task 4 - exponentiation & square root*/
$a4 = 2;
$b4 = 10;
$d4 = 245;

$c4 = pow ($a4, $b4);
$e4 = sqrt ($d4);

/*Task 5 - Date*/
$current_date = date("l dS of F Y h:i:s A");

/*Task 6 - sum of numbers percentages*/
$int1 = 100;
$int2 = 200;
$int3 = 300;
$int4 = 400;
$int5 = 500;

$percentage1 = $int1 * 0.1;
$percentage2 = $int2 * 0.2;
$percentage3 = $int3 * 0.3;
$percentage4 = $int4 * 0.4;
$percentage5 = $int5 * 0.5;

$r= array($percentage1, $percentage2, $percentage3, $percentage4, $percentage5);
$sum_percentage = array_sum($r);

/*Task 7 - Integer in to a coefficient*/
$integer_7_1 = 20;
$integer_7_2 = 1.2;

$int_to_koef = $integer_7_1/100+1;
$koef_to_int = ($integer_7_2-1)*100;
?>

<DICTYPE html>
<html>
    <head></head>
    <body>
        <h1>Task 1: Converter</h1>
        <table border="1" width="30%" cellpadding="5">
            <tr>
                <td>input</td>
                <td>unit</td>
                <td>result</td>
                <td>unit</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>inch</td>
                <td><?php echo $result1?></td>
                <td>sm</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>inch</td>
                <td><?php echo $result2?></td>
                <td>m</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>miles</td>
                <td><?php echo $result3?></td>
                <td>km</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>miles</td>
                <td><?php echo $result4?></td>
                <td>m</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>C</td>
                <td><?php echo $result5?></td>
                <td>F</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>F</td>
                <td><?php echo $result6?></td>
                <td>C</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>nautical miles</td>
                <td><?php echo $result7?></td>
                <td>km</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>km</td>
                <td><?php echo $result8?></td>
                <td>sm</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>foot</td>
                <td><?php echo $result9?></td>
                <td>sm</td>
            </tr>
            <tr>
                <td><?php echo $number1?></td>
                <td>gallon</td>
                <td><?php echo $result10?></td>
                <td>liter</td>
            </tr>
        </table>
        <h1>Task 2: Car speed</h1>
        <table border="1" width="30%" cellpadding="5">
            <tr>
                <td>distance</td>
                <td>time</td>
                <td>km/h</td>
                <td>m/s</td>
            </tr>
            <tr>
            <td><?php echo $s?></td>
            <td><?php echo $t?></td>
            <td><?php echo $v?></td>
            <td><?php echo $v2?></td>
            </tr>
            </table>
        <h1>Task 3: Division by modulus</h1>
        <table border="1" width="30%" cellpadding="5">
            <tr>
                <td>dividend</td>
                <td>divider</td>
                <td>rest</td>
            </tr>
            <tr>
                <td><?php echo $a?></td>
                <td><?php echo $b?></td>
                <td><?php echo $c?></td>
            </tr>
        </table>
        <h1>Task 4: Exponentiation</h1>
        <table border="1" width="30%" cellpadding="5">
            <tr>
                <td>integer</td>
                <td>exponent</td>
                <td>result</td>
            </tr>
            <tr>
                <td><?php echo $a4?></td>
                <td><?php echo $b4?></td>
                <td><?php echo $c4?></td>
            </tr>
        </table>
        <h1>Task 4: Square root</h1>
        <table border="1" width="30%" cellpadding="5">
            <tr>
                <td>integer</td>
                <td>result</td>
            </tr>
            <tr>
                <td><?php echo $d4?></td>
                <td><?php echo $e4?></td>
            </tr>
        </table>
        <h1>Task 5: Date</h1>
        <table border="1" width="35%" cellpadding="5">
            <tr>
                <td><?php echo $current_date?></td>
            </tr>
        </table>
        <h1>Task 6: Sum of numbers percents</h1>
        <table border="1" width="30%" cellpadding="5">
            <tr>
                <td><?php echo $sum_percentage?></td>
            </tr>
        </table>
        <h1>Task 7: Integer in to a coefficient</h1>
        <table border="1" width="30%" cellpadding="5">
            <tr>
                <td>int</td>
                <td>coefficient</td>
            </tr>
            <tr>
                <td><?php echo $integer_7_1?></td>
                <td><?php echo $int_to_koef?></td>
            </tr>
            <tr>
                <td><?php echo $integer_7_2?></td>
                <td><?php echo $koef_to_int?></td>
            </tr>
        </table>
    </body>
</html>