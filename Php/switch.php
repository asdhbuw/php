<?php
$a = 11;
$digit = 0;
if(isset($_GET['task1'])){
    $dig = (int) $_GET['digit'];
    $digit = match ($dig) {
        1 => 'один',
        2 => 'два',
        default => 'нет такой цифры',
    };
}

// switch($a){
//     case 1:
//         $b = "один";
//         echo $b;
//         break;
//     case 2:
//         $b = "2";
//         echo $b;
//         break;
//     case 5:
//         $b = "5";
//         echo $b;
//         break;
//     case 10:
//         $b = "10";
//         echo $b;
//         break;
//         default:
//         echo "ничего не совпало";
// }

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
        <p>Введите число<input type = "text" name="task1"></p>
        <p><input type="submit" value="отправить"></p>
        <p><?= "цифра называется: $digit"; ?><p>
    <form>
</body>
</html>