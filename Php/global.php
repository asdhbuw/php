<h2>Задание 1</h2>
<?php $r = 10;
$R = fn ($r) => $r * 2 * 3.14;
?>
Длинна окружности равна: <?=$R($r)?>


<h2>Задание 2</h2>
<?php $r = 10;
$R = fn ($r) => $r ** 2 * 3.14;
?>
Площадь круга равна: <?=$R($r)?>


<h2>Задание 3</h2>
<?php 

$a = 10;
$b = 15;
$c = 12;
$p = ($a + $b + $c) / 2;
$s = fn($a, $b, $c, $p) => sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
?>
Площадь треугольника: <?= $s($a, $b, $c, $p) ?>


<h2>Задание 4</h2>
<?php 
$a = 10;
$b = 15;
$c = 12;
$p = ($a + $b + $c) / 2;

$s = fn($a, $b, $c, $p) => 
    ($a + $b > $c && $a + $c > $b && $b + $c > $a && $a > 0 && $b > 0 && $c > 0) 
    ? sqrt($p * ($p - $a) * ($p - $b) * ($p - $c)) : 0;
?>
Площадь треугольника: <?= $s($a, $b, $c, $p) ?>


<h2>Задание 5</h2>
<?php
$a = 10;
$b = -10;
$s = fn($a, $b) => $a > $b ? 'a больше b' : ($a < $b ? 'a меньше b' : 'a = b');
?>
<?= $s($a, $b)?>


<h2>Задание 6</h2>
<?php
$str = 'hello world my name is sdfjhshdjf';
$stR = fn($str) => strlen($str) > 79 ? 'String is long' : (strlen($str) < 32 ? 'String is short' : 'Length of String OK');
?>
<?= $stR($str)?>


<h2>Задание 7</h2>
<?php
$summ = 100;
$bread = 50;
$a = fn($summ, $bread)  => $summ > $bread ? ['result' => $summ - $bread, 'message' => 'Вы можете купить хлеб, сдача: '] : 
($summ < $bread ? ['result' => $bread - $summ, 'message' => 'вы не можете купить хлеб, не хватает: '] :
['result' => null, 'message' => 'вам ровно хватает на хлеб']);
$b = $a($summ, $bread);
?>
<?= $b['message'], $b['result']?>