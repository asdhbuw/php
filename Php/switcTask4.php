<?php
$k = $_GET["age"];
$last = $k  % 10;
$b = "лет";
switch($last){
    case $last == 1 && $k != 11:
        $b ="год";
        break;
    case $last >= 2 && $last <=4 && ($k < 10 || $k > 20):
        $b = "года";
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
        <p>Введите возраст<input type = "text" name="age"></p>
        <p><input type="submit" value="отправить"></p>
        <p><?= "Мне $k $b"; ?><p>
    <form>
</body>
</html>