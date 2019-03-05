<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 4</title>
</head>
<body>
<?php

// Задания 1 и 2

$path = __DIR__ . '/img';

$fileList = array_diff(scandir($path), ['..', '.']);

foreach($fileList as $key => $value) {
    echo '<a target="_blank" href="img/' . $value .  '"><img src="img/' . $value . '" alt="" width=300 height = 250></a>';
}

// Дополнительное задание 1

function simpleLogging() {
    $log = fopen('logs/log.txt', 'a+');
    fwrite($log,  date('l jS \of F Y h:i:s A') . "\r\n");
    fclose($log);
}

// Дополнительное задание 2

function smartLogging() {
    fopen('logs/log.txt', 'a+');
    $logFile = file('logs/log.txt');

    if (count($logFile) === 10) {
        $listOfLogs = array_diff(scandir(__DIR__ . '/logs'), ['..', '.']);

        fopen('logs/log' . count($listOfLogs) . '.txt', 'a+');
        copy('logs/log.txt', 'logs/log' . count($listOfLogs) . '.txt');

        unlink('logs/log.txt');
    }
    simpleLogging();
}

smartLogging();

?>
</body>
</html>