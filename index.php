<!doctype html>
<?php
$title = 'Lesson2';

function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}

function sub($arg1, $arg2) {
    return $arg1 - $arg2;
}

function div($arg1, $arg2) {
    if ($arg2 != 0) {
        return $arg1 / $arg2;
    } else {
        echo "division by 0";
    }
}

function mult($arg1, $arg2) {
     return $arg1 * $arg2;
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            return sum($arg1, $arg2);
        case '-':
            return sub($arg1, $arg2);
        case '/':
            return div($arg1, $arg2);
        case '*':
            return mult($arg1, $arg2);
        default:
            echo 'Оператор не опознан';
    }
}

function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    }
    $power = $val * power($val, $pow - 1);
    return $power;
}

function dec($number, $titles) {
    $cases = [2, 0, 1, 1, 1, 2];
    return $number." ".$titles[ ($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)] ];
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<?php

echo 'Задание №1:' . '<br>';

echo 'Число а = ' . $a = mt_rand(-100, 100) . ';<br>';
echo 'Число b = ' . $b = mt_rand(-100, 100) . ';<br>';

if (($a >= 0) && ($b >= 0)) {
    echo 'Оба числа положительны и их разница равна: ' . sub($a, $b) . '<br>';
} elseif (($a < 0) && ($b < 0)) {
    echo 'Оба числа отрицательны и их произведение равно: ' . mult($a, $b) . '<br>';
} else {
    echo 'Числа разных знаков и их сумма равна: ' . sum($a, $b) . '<br>';
}

echo '<br>' . 'Задание №2:' . '<br>';

$a = mt_rand(0, 15);
echo 'Число а = ' . $a . '<br>';

switch ($a) {
    case 1:
        echo $a++ . "\n";
    case 2:
        echo $a++ . "\n";
    case 3:
        echo $a++ . "\n";
    case 4:
        echo $a++ . "\n";
    case 5:
        echo $a++ . "\n";
    case 6:
        echo $a++ . "\n";
    case 7:
        echo $a++ . "\n";
    case 8:
        echo $a++ . "\n";
    case 9:
        echo $a++ . "\n";
    case 10:
        echo $a++ . "\n";
    case 11:
        echo $a++ . "\n";
    case 12:
        echo $a++ . "\n";
    case 13:
        echo $a++ . "\n";
    case 14:
        echo $a++ . "\n";
    default:
        echo $a++ . "<br>";
}

echo '<br>' . 'Задания №3 и №4:' . '<br>';

echo mathOperation(1,3, '*') . '<br>';

echo '<br>' . 'Задание №6: (только для целочисленных положительных значений степени)' . '<br>';

echo power(3,4) . '<br>';

echo '<br>' . 'Задание №7:' . '<br>';

$hours = ['час', 'часа', 'часов'];
$minutes = ['минута', 'минуты', 'минут'];

echo dec(date(H), $hours) . ' ' . dec(date(i), $minutes);

?>
</body>
</html>

