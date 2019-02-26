<?php
$html = file_get_contents('task5.html');
preg_match_all( '#<footer>(.+?)</footer>#is', $html, $matches );
$html = str_replace($matches[1][0], 'Current date: ' . date('jS \of F Y'), $html);
echo $html;