<?php
$str = 'Hello';
echo $str, '<br>';
for($i = 0; $i < mb_strlen($str); $i++){
    echo $str[$i], '<br>';
}
echo mb_strlen($str);


echo "<h1>Задание 1</h1>";
$str = 'Hello(world)a';
$j = 0;
while($str[$j] != '('){
    $j ++;
}
$j++;
while($str[$j] != ')'){

    echo $str[$j];
    $j ++;
}


echo "<h1>Задание 2</h1>";
$str = 'hello word.';
$a = 1;
for($i = 0; $i < mb_strlen($str); $i++){
    if($str[$i] == ' '){
        $a ++;
    }
}
echo $a;


echo "<h1>Задание 3</h1>";

