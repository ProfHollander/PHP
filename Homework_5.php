<?php
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'lesson5');

$sql = "SELECT id, name, counter FROM lesson5 ORDER BY counter DESC";

$res = mysqli_query($link, $sql) or die(mysqli_error($link));

$html = '';
while ($picture = mysqli_fetch_assoc($res)) {
    $html .= <<<php
    <a href="?id={$picture['id']}"><img src="img/{$picture['name']}" alt="" width=300 height = 250></a>
php;
}


$id = (int)$_GET['id'];
if ($id) {
    $sqlUpd = "UPDATE lesson5 SET counter = counter + 1 WHERE id = $id";
    $resUpd = mysqli_query($link, $sqlUpd) or die(mysqli_error($link));
    $html = '';

    $sql = "SELECT id, name, counter FROM lesson5 ORDER BY counter DESC";

    $res = mysqli_query($link, $sql) or die(mysqli_error($link));

    while ($picture = mysqli_fetch_assoc($res)) {

        if ($picture['id'] == $id) {
            $html .= <<<php
			Количество просмотров равно: {$picture['counter']} <br>
			<img src="img/{$picture['name']}" alt="">
php;
        }
    }
    $html .= <<<php
    <a href="/">Назад</a>
php;

}

echo $html;
?>