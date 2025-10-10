<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Таблица умножения</h1>
    <table border="1">
        <?php
            for ($i = 1;$i <= 9; $i++){
                echo "<tr>";
                for ($j = 1; $j <= 9; $j++){
                    echo "<td style = 'width:40px;text-align:center'>".
                    $i * $j .  "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>