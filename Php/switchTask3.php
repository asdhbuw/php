<?php
$a = $_GET["number"];
$b = $a % 10;
$b = $b * $b;
$str = substr($b, -1);
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