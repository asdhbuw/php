 <?php
 $distance = 10;
 $day = 5;
for($i = 1;$i < $day;$i++){
    $newDistance = $distance / 10;
    $distance +=$distance;
    //echo $distance, '<br>';
}
echo $distance;
 ?>