<?php
echo "<h2> Задание 1 </h2>";
$array = [
    'monday'=>'понедельник', 
    'tuesday'=>'вторник', 
    'wednesday'=>'среда', 
    'thursday'=>'четверг', 
    'friday'=>'пятница', 
    'saturday'=>'суббота', 
    'sunday'=>'воскресенье', 
    'red'=>'красный', 
    'green'=>'зеленый', 
    'blue'=>'синий'];
foreach($array as $key => $item){
    echo "<p>$key - $item</p>";
}


echo "<h2> Задание 2 </h2>";
$a = 'ффф';
$f = false;
$array = [
    'monday'=>'понедельник', 
    'tuesday'=>'вторник', 
    'wednesday'=>'среда', 
    'thursday'=>'четверг', 
    'friday'=>'пятница', 
    'saturday'=>'суббота', 
    'sunday'=>'воскресенье', 
    'red'=>'красный', 
    'green'=>'зеленый', 
    'blue'=>'синий'];
foreach($array as $key => $item){
    if($item == $a){
        echo "$item - $key";
        $f = true;
        break;
    }
}
if ($f == false){
    echo  "Этого слова нет в словаре";
}


echo "<h2> Задание 3 </h2>";
$a = 'red';
$f = "Этого слова нет в словаре";
$array = [
    'monday'=>'понедельник', 
    'tuesday'=>'вторник', 
    'wednesday'=>'среда', 
    'thursday'=>'четверг', 
    'friday'=>'пятница', 
    'saturday'=>'суббота', 
    'sunday'=>'воскресенье', 
    'red'=>'красный', 
    'green'=>'зеленый', 
    'blue'=>'синий'];
foreach($array as $key => $item){
    if($key == $a){
        $f = "$key - $item";
        break;
    }else if ($item == $a){
        $f = "$item - $key";
        break;
    }
}
echo  $f;


echo "<h2> Задание 3 </h2>";
$word = "banana";
$array = [];
foreach($array as $key => $item){
    
}
