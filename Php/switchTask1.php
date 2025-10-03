<?php
$a = $_GET["number"];
switch($a){
    case 0:
        $str = "zero";
        break;
    case 1:
        $str = "one";
        break;
    case 2:
        $str = "two";
        break;
    case 3:
        $str = "three";
        break;
    case 4:
        $str = "four";
        break;
    case 5:
        $str = "five";
        break;
    case 6:
        $str = "six";
        break;
    case 7:
        $str = "seven";
        break;
    case 8:
        $str = "eight";
        break;
    case 9:
        $str = "nine";
        break;
}
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
        <p>Введите число<input type = "text" name="number"></p>
        <p><input type="submit" value="отправить"></p>
        <p><?= "$str"; ?><p>
    <form>
</body>
</html>