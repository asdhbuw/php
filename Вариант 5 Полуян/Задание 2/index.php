<?php
//Кондитерская фабрика выпускает конфеты. Конфеты могут продаваться на развес или упаковками, 
//поэтому каждые конфеты имеют две цены - за кг и за упаковку.
//Создайте массив из массивов, в которых хранится следующая информация:
//наименование, артикул(уникальное целое число), цена за килограмм, вес в упаковке, цена за упаковку
//Вывести на экран информацию о тех конфетах, которые имеют цену за кг от 300 до 500р.  
//Напишите функцию getArrayCandy($arr, $minPrice, $maxPrice), принимающую параметром массив, 
//минимальную и максимальную цену,возращающую новый массив массивов. Новый массив содержит
//массивы с такими свойствами: наименование, вес в упаковке, цена за упаковку, 
//увеличение цены упакованных конфет. (Упакованные конфеты
//обычно стоят дороже, чем конфеты на развес. Посчитайте увеличение цены у упакованных
//конфет в процентах от развесных(проценты округлить до десятых).)
//Используя эту функцию выведите требуемую информацию. 
//Входной и выходной массивы создайте по образцу.
/* пример входного массива
$arr = [[
  'title' => 'Мишка',
  'art' => 10002512,
  'price' => 350,
  'weight' => 500,
  'priceForPack' => 190,
  ]
]
Результ работы функции - массив объектов с такими полями (образец)
[
  'title' => 'Мишка',
  'weight' => 500,
  'priceForPack' => 190,
  'priceInc' => 8.6 
]
*/
$candy = [
  ['title' => 'Мишка','art' => 10002512,'price' => 350,'weight' => 500,'priceForPack' => 190,],
  ['title' => 'Шоколадка','art' => 10002513,'price' => 320,'weight' => 600,'priceForPack' => 200],
  ['title' => 'Мармелад','art' => 10002514,'price' => 400,'weight' => 300,'priceForPack' => 130]
];
function getArrayCandy($arr, $minPrice, $maxPrice){
  $result = [];
  foreach($arr as $candy){
    if($candy['price'] >= $minPrice && $candy['price'] <= $maxPrice){
      $weightInKg = $candy['weight'] / 1000;
      $pricePerKgWeight = $candy['price'] * $weightInKg;
      $priceIncrease = 0;
      if($pricePerKgWeight > 0){
        $priceIncrease = (($candy['priceForPack'] - $pricePerKgWeight) / $pricePerKgWeight) * 100;
        $priceIncrease = round($priceIncrease, 1);
      }
      $result[] = [
      "title" => $candy['title'],
      "weight" => $candy['weight'],
      "priceformat" => $candy['priceformat'],
      "priceinc" => $priceIncrease];
    }
  }
  return $result;
}
$expensiveCandies = getArrayCandy($candy, 350, 500);
foreach($expensiveCandies as $candy){
  echo 'Название: ',$candy['title'];
  echo 'Вес: ',$candy['weight'];
  echo $candy['priceformat'];
}