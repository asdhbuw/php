<h2>Задание 1</h2>
<?php
class User1{
    public $firstName, $lastName, $email;
    
    public function __construct($firstName,$lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function sayAboutMe(){
        echo "Имя: ", $this->firstName, "<br>", "Фамилия: ", $this->lastName;
    }
}
$user = new User1('Серёжа', 'Бурцеу'); 

$user2 = new User1('Маратик', 'Аргунов'); 
?>
<p><?php $user->sayAboutMe(); ?></p>
<p><?php $user2->sayAboutMe(); ?></p>


<h2>Задание 2</h2>
<?php
class Car1{
    public $brand, $model, $type, $color, $weight;

    public function __construct($brand,$model,$type,$color,$weight){
        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
        if($this->color = 0){
            $this->color = 'черный';
        }else{
            $this->color = $color;
        }
        if($this->weight = 0){
            $this->weight = 0;
        }else{
            $this->weight = $weight;
        }
    }

    public function getWeight(){
        echo "Вес: $this->weight";
    }
    public function getInfo(){
        echo "Информация о машине: <br> Брэнд: $this->brand <br> Модель: $this->model <br> Тип: $this->type <br> Цвет: $this->color <br> Вес: $this->weight";
    }
}
$car = new Car1('ВАЗ', '2107', 'Космолет', 'Прекрастный', 1400);
?>
<p><?php $car->getInfo() ?></p>
