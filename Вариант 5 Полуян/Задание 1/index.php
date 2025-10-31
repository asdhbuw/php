<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="">
        <p>Введите римское число<input type = "text" name="rim"></p>
        <p><input type="submit" value="отправить" name="taskOne"></p>
    <form>
    </body>
    </html>
<?php
function romeToDec($str){
    $roman_numerals = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];
    $result = 0;
    $prev_value = 0;
    for($i = strlen($str) - 1; $i >= 0; $i--){
        $current_chair = $str[$i];
        $current_value = $roman_numerals[$current_chair];
        if($current_value <  $prev_value){
            $result  -= $current_value;
        }else{
            $result += $current_value;
        }
        $prev_value = $current_value;
    }
    return $result;
}

if(isset($_GET['taskOne'])){
    $str = $_GET['rim'];
}
echo 'Это число равно: ',romeToDec($str);






//Дана строка, содержащая число(до 1000) в римской нумерации.
//Для римских цифр используйте символы: 'I','V','X','L','C','D','M' 
//Напишите функцию функцию romeToDec($str), 
//принимающую параметром строку
//и возвращающую число. 
//Задайте строку в форме и выведите в консоль результат.


