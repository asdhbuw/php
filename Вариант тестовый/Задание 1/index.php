<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="">
        <p>Введите слово<input type = "text" name="str"></p>
        <p><input type="submit" value="отправить" name="taskOne"></p>
    <form>
    </body>
    </html>
<?php
$str = $_GET['str'];
function palindrom($str){
    $cleanStr = str_replace(' ', '', mb_strtolower($str));
    $result = $cleanStr == strrev($cleanStr);
    return $result;
}
if(isset($_GET['taskOne'])){
    echo $str, ' ';
    echo palindrom($str);
}
//Дана строка. Проверить является ли она палиндромом (читается одинако слева и справа).
//Результат вместе с исходной строкой вывести на экран.
//Реализуйте функцию palindrom($str), принимающую строку и выводящую true,
//если строка палиндром и false, если нет.