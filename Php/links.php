<?php
$a = 5; 
function setParam(&$param){
    $param = 10;
}
setParam($a);
?>
<h2>Задание 1</h2>
array_multisort()
array_pop()
array_push()
array_shift()
array_splice() <br>
array_unshift()
array_walk()
array_walk_recursive()
arsort()
asort() <br>
krsort()
ksort()
natcasesort()
natsort()
rsort() <br>
shuffle()
sort()
uasort()
uksort()
usort()



<h2>Задание 2</h2>
<?php $a = 5;
function cub(&$a){
    $a = pow($a,3);
} 
cub($a) ?>
<?= $a?>


<h2>Задание 3</h2>
<?php
$str = "hello,,, world, how, are, you";
function delete(&$str) {
    $str = str_replace(',', '', $str);
}
delete($str);
?> 
<?= $str ?>


<h2>Задание 4</h2>
<?php
$str = 'Hello world'; 
function reverseWords(&$str) {
    $str = strrev($str);
}
reverseWords($str);
?>
<?= $str ?>


<h2>Задание 5</h2>
<?php
$array = [-1,4,-9,0,5];
function mod(&$array){
    for($i = 0; $i <= count($array) - 1; $i ++){
        if ($array[$i] < 0) $array[$i] *= -1;
    }
}
mod($array); ?>
<?= implode(' ',$array) ?>


<h2>Задание 6</h2>
<?php
$array = [-1,4,-9,0,5];

function keys(&$array) {
    $newArray = [];
    foreach($array as $num) {
        $a = "$num";
        $newArray[$a] = $num;
    }
    $array = $newArray;
}

var_dump($array);
echo "<br>";
keys($array);
var_dump($array);