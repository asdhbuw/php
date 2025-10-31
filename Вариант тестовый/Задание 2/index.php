
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
    <p>Введите текст с особым символом<input type = "text" name="text"></p>
    <p>Введите особый символ<input type = "text" name="symbol"></p>
    <p><input type="submit" value="отправить" name="taskTwo"></p>
<form>
</body>
</html>

<?php
function countLettersAfter($str, $sim) {
    $position = strpos($str, $sim);
    if ($position === false) {
        return 0;
    }
    $count = strlen($str) - $position - 1;
    return $count;
}

if(isset($_GET['taskTwo'])){
    $str = $_GET['text'];
    $sim = $_GET['symbol'];
    echo countLettersAfter($str, $sim);
    
}


//В строке имеется одна точка с запятой (;).
//Подсчитать количество символов от (;), не включая его, до конца строки.
//Реализуйте функцию countLettersAfter($str, $sim), принимающую параметрами
//строку и символ и возвращающую число символов после первого вхождения заданного символа.
//Задайте строку и выведите результат на экран.