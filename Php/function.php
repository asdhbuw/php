<h1>Функции</h1>
<?php
function multArray($numbers){
    $result = 1;
    foreach($numbers as $num){
        $result *= $num;
    }
    return $result;
}
$nums = [2,3,5,2,5,34,47];
echo multArray($nums), '<br>';

echo "<h1>Задание 1</h1>";
    ?>
     <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="">
        <p>Введите радиус окружности<input type = "text" name="r"></p>
        <p><input type="submit" value="отправить" name="taskOne"></p>
    <form>
    </body>
    </html>
    <?php
if(isset($_GET['taskOne'])){
    echo "Площадь равна: ", lengthCircle($_GET['r']);
}
function lengthCircle($r){
    return $r * 2 * 3.14;
}



echo "<h1>Задание 2</h1>";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="">
            <p>Введите первую сторону<input type = "text" name="sideOne"></p>
            <p>Введите вторую сторону<input type = "text" name="sideTwo"></p>
            <p>Введите третью сторону<input type = "text" name="sideThree"></p>
            <p><input type="submit" value="отправить" name="taskTwo"></p>
    <form>
    </body>
    </html>
<?php

function squareTriangle($a,$b,$c){
    $p = ($a + $b + $c) / 2;
    if($a < $b + $c and $b < $c + $a and $c < $b + $a){
        $g = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        return $g;
    }else{
        return "0";
    }
}
if(isset($_GET['taskTwo'])){
    echo "Площадь равна: ", squareTriangle($_GET['sideOne'], $_GET['sideTwo'], $_GET['sideThree']);
}


echo "<h1>Задание 3</h1>";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="">
            <p>Введите число<input type = "text" name="num"></p>
            <p><input type="submit" value="отправить" name="taskThree"></p>
    <form>
    </body>
    </html>
<?php
function maxDivider($num){
    for($i = $num-1;  $i < $num; $i--){
        if(($num % $i) == 0){
            return $i;
            break;
        }else{
            continue;
        }
    }
}
if(isset($_GET['taskThree'])){
    echo "Максимальный делитель: ",maxDivider($_GET['num']);
}


echo "<h1>Задание 4</h1>";
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <form action="">
                <p>Введите число<input type = "text" name="numA"></p>
                <p><input type="submit" value="отправить" name="taskFour"></p>
        <form>
        </body>
        </html>
<?php
function allDivider($num){
    $nums = [];
    for($i = $num-1; $i >=2; $i--){
        if(($num % $i) == 0){
            $nums[] = $i;
        }
    }
    return $nums;
}
if(isset($_GET['taskFour'])){
    $nums = allDivider($_GET['numA']);
    foreach($nums as $num){
        echo $num, "<br>";
    }
}


echo "<h1>Задание 5</h1>";
$nums = [4,1,5,25,3,9,87];
echo squareArray($nums);
function squareArray($nums){
    $numsSumm = 0;
    foreach($nums as $num){
        $numsSumm += $num**2;
    }
    return $numsSumm;
}