<?php
    $startNumber = $_GET['startNumber'];
    $multiplier  = $_GET['multiplier'];
    $quantity = $_GET['quantity'];
    for($i = 0;$i <= $quantity;$i++){
        echo $startNumber, '<br>';
        $startNumber = $startNumber * $multiplier;
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
        <p>Введите первоночальное значение <input type = "text" name="startNumber"></p>
        <p>Введите множитель  <input type = "text" name="multiplier"></p>
        <p>Введите колличество чисел  <input type = "text" name="quantity"></p>
        <p><input type="submit" value="отправить"></p>
    <form>
</body>
</html>