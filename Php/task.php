<?php
$rectSquare = 0;
if(isset($_GET['rect'])){
     $rectSquare = $_GET['len'] * $_GET['width'];

     echo $rectSquare;
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
        <p>Введите <input type = "text" name="len"></p>
        <p>Введите   <input type = "text" name="width"></p>
        <p><input type="submit" name="rect" value="отправить"></p>
    <form>
</body>
</html>