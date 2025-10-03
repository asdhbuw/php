<?php
echo "<h2> Задание 1 </h2>";
$nums = [1=>1,2,4,5];
$min = $nums[1];
$max = $nums[1];
// for($i = 1;$i <= count(value: $nums);$i++){
//     if($max < $nums[$i]){
//         $max = $nums[$i];
//     }
// }
foreach($nums as $num){
    if($min > $num){
        $min = $num;
    }
    if($max < $num){
        $max = $num;
    }
}
echo "Максимум: $max Минимум: $min";
// for ($i = 1;$i <= count(value: $nums);$i++){
//     echo $nums[$i], '<br>';
// }
// foreach($nums as $num){
//     echo $num, '<br>';
// }


echo "<h2> Задание 2 </h2>";
$nums = [1=>1,3,6,7,32];
$sum = $nums[1];
$umn = $nums[1];
foreach($nums as $num){
    $sum += $num;
    $umn = $umn * $num;
}
echo "Сумма: $sum ,Произведение: $umn";


echo "<h2> Задание 3 </h2>";
$nums = [1=>1, 3, 4, 6];
$sum = 0;
foreach($nums as $num){
    $sum += $num;
}
echo "Среднее арифметическое: ", $sum / count($nums);


echo "<h2> Задание 4 </h2>";
$nums = [-1, 2, 3, -4, 1];
$newNums = [];
foreach($nums as $num){
    if($num < 0 and $num != 0){
        $newNums[] = $num * -1;
    }else{
        $newNums[] =  $num * $num;
    }
}
echo "Новый масив: ";
for($i = 0;$i < count(value: $newNums);$i++){
    echo "$newNums[$i] ";
}
echo "Исходный масив:";
for($i = 0;$i < count(value: $nums);$i++){
    echo "$nums[$i] ";
}

echo "<h2> Задание 5 </h2>";
$nums = [1,3,4,2,123,6,12,8,5,9];
// foreach($nums as $num){
//     if($num % 2 == 0){
//         echo $num, "<br>";
//     }
// }


echo "<h2> Задание 6 </h2>";
$nums = [1,3,2,5,4,2,3];
$a = 0;
for($i = 1;$i < count(value: $newNums);$i++){
    if($nums[$i-1] < $nums[$i]){
        echo "$nums[$i] ";
    }
}


