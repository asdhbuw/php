<?php

// $nums = [2,5,8,12,898,1,23];

// //echo count($nums);
// //echo $nums[array_rand($nums)];
// $user= [
//     'name' => 'Пётр',
//     'login' => 'pea3s',
//     'id' => 1,
// ];
// $numsFilter = array_filter($nums,function ($num)
// {if($num > 10) return true;
//     else return false;});

// //sort($nums);
// //var_dump(array_search(898, $nums));
// //var_dump($numsFilter);

// var_dump(array_map(function($num){return $num**2;}, $nums));


echo "<h1>Функции для массивов</h1>";


echo "<h2>Задание 1</h2>";
$nums = [1,7,2,7,0,4,2345,45,69];
$nullPosition = array_search(0, $nums);
$result = array_slice($nums, 0, $nullPosition + 1);
echo "Числа до первого нуля включительно: " , implode(', ', $result);


echo "<h2>Задание 2</h2>";
$nums = [1,7,2,7,0,4,2345,45,69];
$maxNum = max($nums);
$minNum = min($nums);
$maxNumKey = array_search($maxNum, $nums);
$minNumKey = array_search($minNum, $nums);
$nums[$maxNumKey] = $minNum;
$nums[$minNumKey] = $maxNum;
echo implode(", ", $nums);


echo "<h2>Задание 3</h2>";
$nums = [1,0,2,7,0,4,0,45,69];
$number = array_keys($nums, 0);
echo implode(",", $number);


echo "<h2>Задание 4</h2>";
$nums = [1,0,2,7,0,4,0,45,69];
$result = array_filter($nums, function ($num)  {
    return $num !== 0;
});
echo implode(" ",$result);


echo "<h2>Задание 5</h2>";
