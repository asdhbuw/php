<h1>Многомерные массивы</h1>
<?php
$students = [
    ['name' => 'Иванов Иван', 'group' => 'ИВ1к', 'course' => 1],
    ['name' => 'Сергеев Сепгей', 'group' => 'ИВ2', 'course' => 2],
    ['name' => 'Степанов Антон', 'group' => 'МТ1', 'course' => 1],
    ['name' => 'Андропов Юрий', 'group' => 'ИВ1', 'course' => 4]
];
foreach($students as $student){
    echo "Имя:{$student['name']}, Группа:
    {$student['group']}, Курс:{$student['course']}";
    echo '<br>';
}


echo "<h2>Задание 1</h2>";
$array = [
    [1,3,2],
    [2,5,9],
    [0,31,65],
    [3,13,23]
];
echo "<table border = '1'>";
foreach($array as $num){
    echo "<tr>";
    foreach($num as $a){
        echo "<td>$a</td>";
    }
    echo "</tr>";
}
echo "</table>";


echo "<h2>Задание 2</h2>";
$num = [];
for($i = 10;$i <= 99;$i++){
    $num[] = $i * $i;
    
}
$size = 10;
echo "<table border = '1'";
for ($row = 0; $row <= $size; $row++){
    echo "<tr>";
    for($col = 0; $col < $size; $col++){
        $ind = $row * $size + $col;
        if($ind < count($num)){
            echo "<td>{$num[$ind]}</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";


echo "<h2>Задание 3</h2>";
$nums = [
    [1,3,-2,32,51],
    [2,5,9,41,24],
    [0,31,65,73,1],
    [3,13,23,35,15],
    [68,4,90,12,99]
];
$min = 0;
$max = 0;
$indexMin = 0;
$indexMax = 0;
foreach($nums as $i => $num){
    foreach($num as $j => $row){
        if($row > $max){
            $max = $row;
            $indexMax = [$i, $j];
        }
        if($row < $min){
            $min = $row;
            $indexMin = [$i, $j];
        }
    }
}
$indexMax[0]+=1;
$indexMax[1]+=1;
$indexMin[0]+=1;
$indexMin[1]+=1;
echo "Минимальное значение: $min его индекс: {$indexMin[0]} {$indexMin[1]}", "<br>";
echo "Максимальное значение: $max его индекс: {$indexMax[0]} {$indexMax[1]}";