<?php
$a = $_GET["unitOfChange"];
$b = $_GET["value"];
if(isset($_GET['task1'])){
$str = match ($a) {
    1 => $b,
    2 => $b  / 1000000,
    3 => $b / 1000,
    4 => $b * 1000,
    5 => $b * 100,
    default => 'нет такой цифры'
};
}
// switch($a){
//     case 1:
//         $str = $b;
//         break;
//     case 2:
//         $str = $b  / 1000000;
//         break;
//     case 3:
//         $str = $b  / 1000;
//         break;
//     case 4:
//         $str = $b * 1000;
//         break;
//     case 5:
//         $str = $b * 100;
        
//     }
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
        <p>Введите единицу измерения<input type = "text" name="unitOfChange"></p>
        <p>Введите значиние<input type = "text" name="value"></p>
        <p><input type="submit" value="отправить"></p>
        <p><?= "$str"; ?><p>
    <form>
</body>
</html>