<!doctype html>
<?php
$title = 'Lesson1';
$head = 'Main';
$date = 'Current year: ' . date(Y);
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
<h1><?=$head?></h1>
<p><?=$date?></p>
<?php
$a = 5;
$b = 3;
echo 'Исходные данные а: ' . $a . ' b: ' . $b . '<br>';
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo 'Измененные данные а: ' . $a . ' b: ' . $b;
?>
</body>
</html>

