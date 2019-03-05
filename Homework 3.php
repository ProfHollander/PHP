<?php
// Задание 1

echo 'Задание №1' . '<br>';

$a = 3;

while ($a < 100) {
    echo $a . ' ';
    $a +=3;
};


// Задание 2

echo '<br>' . 'Задание №2' . '<br>';

$b = 0;

echo '<br>' . $b . ' - это ноль' . '<br>';

do {
    echo ($b = $b + 1) . ' - это нечётное число' . '<br>';
    echo ($b = $b + 1) . ' - это чётное число' . '<br>';
} while ($b < 10);

// Задание 3

echo '<br>' . 'Задание №3' . '<br>';

$towns = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Лениградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Скопин'],
    'Москва' => 'Москва'
];

foreach ($towns as $key => $value) {
    echo '<br>' . $key . ': <br>';

    if (is_array($value)) {

        $number = 1;
        $counter = count($value);

        foreach ($value as $town) {

            if ($number != $counter) {
                echo $town . ', ';
                $number = $number + 1;
            } else {
                echo $town . '<br>';
            }
        }

    } else {
        echo $value . '<br>';
    }
}

// Задание 4

echo '<br>' . 'Задание №4' . '<br>';

$letters = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
    'ж' => 'j', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l',
    'м' => 'm', 'н' => 'n', 'o' => 'о', 'п' => 'p', 'р' => 'r', 'c' => 's',
    'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'сh', 'ш' => 'sh',
    'щ' => 'sch', 'ъ' => '\'', 'ы' => 'i', 'ь' => '\'', 'э' => 'е', 'ю' => 'yu',
    'я' => 'ya', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO',
    'Ж' => 'J', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L',
    'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S',
    'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH',
    'Щ' => 'SCH', 'Ы' => 'I', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', ' ' => '_'
];

$string = 'Мой мир';

echo strtr($string, $letters) . '<br>';

// Задание 5

echo '<br>' . 'Задание №5' . '<br>';

function replace($str) {
    return str_replace(' ', '_', $str);
}

echo replace('  Мой мир 123 sdf  ') . '<br>';

// Задание 7

echo '<br>' . 'Задание №7' . '<br>';

for ($i = 0; $i <= 9; print_r($i++ . ' ')) {};

// Задание 8

echo '<br>' . 'Задание №8' . '<br>';

foreach ($towns as $key => $value) {
    echo '<br>' . $key . ': <br>';

    if (is_array($value)) {

        $number = 1;
        $counter = count($value);

        foreach ($value as $town) {

            if ($number != $counter) {
                if (strpos($town, 'К') === 0) {
                    echo $town . ', ';
                    $number = $number + 1;
                }
            } else {
                if (strpos($town, 'К') === 0) {
                    echo $town . '<br>';
                }
            }

        }
    } else {
        if (strpos($town, 'К') === 0) {
            echo $value . '<br>';
        }
    }
}

// Задание 9

echo '<br>' . 'Задание №9' . '<br>';

$letter = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
    'ж' => 'j', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l',
    'м' => 'm', 'н' => 'n', 'o' => 'о', 'п' => 'p', 'р' => 'r', 'c' => 's',
    'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'сh', 'ш' => 'sh',
    'щ' => 'sch', 'ъ' => '\'', 'ы' => 'i', 'ь' => '\'', 'э' => 'е', 'ю' => 'yu',
    'я' => 'ya', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO',
    'Ж' => 'J', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L',
    'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S',
    'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH',
    'Щ' => 'SCH', 'Ы' => 'I', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', ' ' => '_'
];

$link = 'Мой мир 123';

function replace_url($string, $letter) {
    return strtr($string, $letter);
}

echo replace_url($link, $letter) . '<br>';