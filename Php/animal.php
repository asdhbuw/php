<?php
class Animal{
    public $weight,$type,$height;
    public function __construct($height, $weight, $type){
        $this->height = $height;
        $this->weight = $weight;
        $this->type = $type;
    }

    public function __destruct()
    {
        echo 'Объект удаляеться';
    }

    public  function say(){
        return "rrrrrrh";
    }

    public  function sayHello(){
        echo "Склонитесь перед царем зверей!!!!";
        echo "Приветствую, я $this->type";
    }
}
$animal = new Animal(100,200,'Левв');
// $animal->height = 67;
// $animal->weight = 76;
// $animal->type = "Левв";
?>
<p>Вид: <?=$animal -> type?></p>
<p>Рост: <?=$animal -> height?></p>
<p>Вес: <?=$animal -> weight?></p>
<p>Царь зверей говорит: <?=$animal->say() ?></p>
<p><?php $animal->sayHello();?></p>
<?php
unset($animal); ?>
<p>Конец</p>


<h2>Задание 1</h2>
<?php
class User{
    public $firstName, $lastName, $email;
    
    public function sayAboutMe(){
        echo "Имя: ", $this->firstName, "<br>", "Фамилия: ", $this->lastName;
    }
}
$user = new User(); 
$user -> firstName = "Серёжа";
$user -> lastName = "Бурцеу";

$user2 = new User(); 
$user2 -> firstName = "Маратик";
$user2 -> lastName = "Аргунов";
?>
<p><?php $user->sayAboutMe(); ?></p>
<p><?php $user2->sayAboutMe(); ?></p>


<h2>Задание 2</h2>
<?php
class Car{
    public $brand, $model, $type, $color, $weight, $year, $price;

    public function getInfo(){
        echo "Информация о машине: <br> Брэнд: $this->brand <br> Модель: $this->model <br> Тип: $this->type <br> Цвет: $this->color";
    }
    public function getWeight(){
        echo "Вес: $this->weight";
    }
    public function getPrice(){
        return $this->price;
    }
}
$car = new Car();
$car -> brand = "ВАЗ";
$car -> model = "2107";
$car -> type = "Чертолет";
$car -> color = "Ночной";
$car -> weight = "1400кг";
?>
<p><?php $car->getInfo() ?></p>
<p><?php $car->getWeight() ?></p>


<h2>Задание 3</h2>
<?php
$car1 = new Car();
$car1->brand = "ВАЗ";
$car1->model = "2107";
$car1->type = "Седан";
$car1->color = "Ночной";
$car1->weight = "1400кг";
$car1->year = 1982;
$car1->price = 510000000;

$car2 = new Car();
$car2->brand = "ГАЗ";
$car2->model = "21 Волга";
$car2->type = "Седан";
$car2->color = "Черный";
$car2->weight = "1450кг";
$car2->year = 1970;
$car2->price = 1200000;

$car3 = new Car();
$car3->brand = "ЗАЗ";
$car3->model = "965";
$car3->type = "Хэтчбек";
$car3->color = "Красный";
$car3->weight = "650кг";
$car3->year = 1962;
$car3->price = 800000;

$car4 = new Car();
$car4->brand = "Москвич";
$car4->model = "412";
$car4->type = "Седан";
$car4->color = "Бежевый";
$car4->weight = "1100кг";
$car4->year = 1967;
$car4->price = 950000;

$car5 = new Car();
$car5->brand = "УАЗ";
$car5->model = "469";
$car5->type = "Внедорожник";
$car5->color = "Зеленый";
$car5->weight = "1650кг";
$car5->year = 1972;
$car5->price = 1100000;


$totalPrice = $car1->getPrice() + $car2->getPrice() + $car3->getPrice() + $car4->getPrice() + $car5->getPrice();
?>

<?php foreach([$car1, $car2, $car3, $car4, $car5] as $index => $car): ?>
    <h3>Машина <?= $index + 1 ?></h3>
    <p><?php $car->getInfo(); ?></p>
    <p><?php $car->getWeight(); ?></p>
    <p>Цена: <?= $car->getPrice()?> руб.</p>
    
<?php endforeach; ?>

<h2>Общая стоимость коллекции: <?= $totalPrice ?> руб.</h2>