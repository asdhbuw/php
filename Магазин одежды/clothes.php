<?php
$clothes = [
    [
        'name' => 'Кофта adidas ENT22 SW TOP',
        'category' => 'Кофты',
        'price' => 4000,
        'brand' => 'Adidas',
        'imageUrl' => 'adidas ENT22 SW TOP.webp',
        'stock' => 'true',
        'offer' => 'Скидка 20%'
    ],
    [
        'name' => 'Футболка Tommy Hilfiger',
        'category' => 'Футболки', 
        'price' => 1800,
        'brand' => 'Tommy Hilfiger',
        'imageUrl' => 'Tommy Hilfiger.webp',
        'stock' => 'true',
        'offer' => ''
    ],
    [
        'name' => 'Кросовки Adidas Samba',
        'category' => 'Кросовки', 
        'price' => 2400,
        'brand' => 'Adidas',
        'imageUrl' => 'Samba.webp',
        'stock' => 'true',
        'offer' => ''
    ],
    [
        'name' => 'Брюки спортивные DREAM FIT', 
        'category' => 'Штаны', 
        'price' => 2800,
        'brand' => 'Dream Fit',
        'imageUrl' => 'Dream Fit.webp',
        'stock' => 'true',
        'offer' => ''
    ],
    [
        'name' => 'New Balance 530', 
        'category' => 'кросовки',
        'price' => 6000,
        'brand' => 'New Balance',
        'imageUrl' => 'New Balance.jpg',
        'stock' => 'true',
        'offer' => 'Скидка 10%'
    ],
    [
        'name' => 'Джинсы Diesel D-Finitive', 
        'category' => 'Джинсы', 
        'price' => 18450,
        'brand' => 'Diesel',
        'imageUrl' => 'Джинсы Diesel D-Finitive.jpg',
        'stock' => 'true',
        'offer' => 'Скидка 30%'
    ],
    [
        'name' => 'Хлопковая толстовка Diesel', 
        'category' => 'Кофта', 
        'price' => 23200,
        'brand' => 'Diesel',
        'imageUrl' => 'Diesel blouse.jpg',
        'stock' => 'true',
        'offer' => ''
    ],
    [
        'name' => 'Классические спортивные брюки POLO RALPH LAUREN', 
        'category' => 'Штаны', 
        'price' => 10480,
        'brand' => 'Polo Ralph Lauren',
        'imageUrl' => 'pantsPOLO RALPH LAUREN.jpeg',
        'stock' => 'true',
        'offer' => ''
    ],
    [
        'name' => 'Футболка Polo Ralph Lauren', 
        'category' => 'Футбоки', 
        'price' => 13500,
        'brand' => 'Polo Ralph Lauren',
        'imageUrl' => 'T-shirtPOLO RALPH LAUREN.jpg',
        'stock' => 'true',
        'offer' => ''
    ],
    [
        'name' => 'Футболка Levis с графическим дизайном', 
        'category' => 'Футболки', 
        'price' => 4500,
        'brand' => 'Levis',
        'imageUrl' => 'T-shirtLevis.jpeg',
        'stock' => 'true',
        'offer' => ''
    ]
];
?>
<h2>Задание 2</h2>

<?php foreach($clothes as $product): ?>
    Наименование: <?= $product['name'] ?> <br> 
    Категория: <?= $product['category']?> <br>
    Бренд: <?=$product['brand']?> <br>
    Цена: <?=$product['price']?><br>
<?php endforeach; ?>

<h2>Задание 3</h2>

<h2>Таблица товаров</h2>
<table border='1' cellpadding='5' cellspacing='0'>
    

<tr>
<th>Наименование</th>
<th>Категория</th>
<th>Бренд</th>
<th>Цена</th>
</tr>

<?php  foreach ($clothes as $product): ?>
    <tr>
    <td> <?=  $product['name'] ?> </td>
    <td> <?= $product['category'] ?></td>
    <td> <?= $product['brand'] ?></td>
    <td> <?= $product['price'] ?></td>
    </tr>
<?php endforeach; ?>
</table>

<h2>Задание 4</h2>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="">
        <p>Введите категорию<input type = "text" name="category"></p>
        <p><input type="submit" value="отправить" name="Category"></p>
    <form>
    </body>
    </html>
<?php
if(isset($_GET['Category'])){
    echo 'Все товары данной категории: ';
    $category = $_GET['category'];
    $yesCategory = false;
    foreach($clothes as $product){
        if ($product['category'] == $category){ 
            $yesCategory = true;
            break;
        }else echo 'Такой категории нет(';
    }
    foreach($clothes as $product){
        if($yesCategory){
            echo 'Наименование: ', $product['name'], ' ', "<br>"; 
            echo 'Бренд: ', $product['brand'], ' ', "<br>";
            echo 'Цена: ', $product['price'], ' ', "<br>";
        }
    }
    
}
?>
<h2>Задание 5</h2>

    <form action="">
        <p>Введите наименование товара<input type = "text" name="name"></p>
        <p><input type="submit" value="отправить" name="Name"></p>
    <form>
    
<?php
if(isset($_GET['Name'])){
    $name = $_GET['name'];
    foreach($clothes as $product){
        if($product['name'] == $name) {
            $good = $product;
        }

    }

}
?>
<?php  if(isset($good)):?>
Наименование: <?=$good['name']?> <br>
<img src="image/<?=$good['imageUrl']?>" width = 100> <br>
Акция: <?=$good['offer']?> <br>
Цена: <?=$good['price']?> <br>
<?php else: ?>
    Товар не найден
<?php endif; ?>


<h2>Задание 6</h2>
<?php 
$sortedProducts = $clothes;
usort($sortedProducts, function($a, $b) {
    return $a['price'] - $b['price'];
});?>
<h2>Таблица товаров (отсортирована по цене)</h2>
<table border='1' cellpadding='5' cellspacing='0'>
    <tr>
        <th>Наименование</th>
        <th>Категория</th>
        <th>Бренд</th>
        <th>Цена</th>
    </tr>

    <?php foreach ($sortedProducts as $product): ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['category'] ?></td>
            <td><?= $product['brand'] ?></td>
            <td><?= $product['price'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>