<?php
$lastNumber = 10;
$sum = 1;
for($i = 2;$i  <= $lastNumber;$i++){
    if($i % 2 == 0){
        $sum *= $i;
        echo $sum, '<br>';
    }
}
echo $sum;
?>