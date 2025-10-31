<?php
// $funcEcho = function($string){
//     echo $string;
// };
// $funcEcho('Hello world');

// function useCallback($number, $callback){
//     return $callback($number);
// }
// function square($num){
//     return $num**2;
// }
// $cube = function($num){
//     return $num**3;
// };

// echo useCallback(5, function($num){
//     return $num**3;
// });

echo "<h1>Анонимные функции</h1>";
echo "<h2>Задание 1</h2>";
$nums = [2,1,4,5,8,19];
$numsFilter = array_filter($nums, function($num){
    if($num % 2 == 0) return $num;
});
if(count($numsFilter) > 0)  echo implode($numsFilter);


echo "<h2>Задание 2</h2>";
$nums = [2,1,4,5,8,19];
$cube = function($num){
     return $num**3;
};
echo implode(',',array_map($cube, $nums));


echo "<h2>Задание 3</h2>";
$nums = [2,1,4,5,8,19];
$result = array_reduce($nums, function($carry, $num){
    return $carry + $num;
}) / count($nums);
$resultG = array_reduce($nums, function($carry, $num){
    return $carry * $num;
}, 1) ** (1 / count($nums));
echo $result, "<br>", $resultG;


echo "<h2>Задание 4</h2>";
$students = [
    ['name' => 'Вася', 'birth' => 2005, 'height' => 175],
    ['name' => 'Петя', 'birth' => 2004, 'height' => 168],
    ['name' => 'Коля', 'birth' => 2006, 'height' => 178]
];

$tallStudents = array_filter($students, function($student) {
    return $student['height'] > 170;
});

$names = array_map(function($student) {
    return $student['name'];
}, $tallStudents);

echo "Список имен: " . implode(', ', $names);


echo "<h2>Задание 5</h2>";
$nums = [2,-1,4,-5,8,19,0,67];
$numsPlus = array_filter($nums, function($num){
    return $num > 0;
});
$numsMinus = array_filter($nums, function($num){
    return $num < 0;
});
$numsNull = array_filter($nums, function($num){
    return $num == 0;
});
echo 'положительные: ', implode(',', $numsPlus), "<br>", 'отрицательные: ', implode(',', $numsMinus), "<br>", 'Ноль: ', implode(',', $numsNull);


echo "<h2>Задание 6</h2>";
$nums = [2,-1,4,-5,8,19,0,67];
$k = 4;
$numsPlus = array_filter($nums, function($num) use ($k){
    return $num > $k;
});
$numsMinus = array_filter($nums, function($num) use ($k){
    return $num < $k;
});
$numsNull = array_filter($nums, function($num) use ($k){
    return $num == $k;
});
echo 'больше  k: ', implode(',', $numsPlus), "<br>", 'меньше k: ', implode(',', $numsMinus), "<br>", 'равно k: ', implode(',', $numsNull);


echo "<h2>Задание 7</h2>";
$nums = [2,-1,4,-5,8,19,0,67,27];
$k = 2;
$l = 50;
$m = -10;
$a = array_filter($nums, function($num) use ($k, $m, $l){
    return $num % $k == 0 && $num > $m && $num < $l;
});
echo implode(',', $a);


echo "<h2>Задание 7</h2>";

