<?php
class Cat
{
    private $name;
    private $color;
    private $weight;

    public function __construct(string $name, string $color, string $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . '.';
        echo 'Мой цвет - ' . $this->color . '.';
        echo 'Мой вес - ' . $this->weight . '.';
    }

    //Имя
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    //Цвет
    public function setColor(string $color)
    {
        $this->color = $color;
    }
    public function getColor(): string
    {
        return $this->color;
    }

    //Вес
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }
    public function getWeight(): string
    {
        return $this->weight;
    }
}

$cat1 = new Cat('Снежок', 'Черный', '3.2');


$cat1->sayHello();
$cat1->setName('Барсик');
$cat1->setColor('Белый');
$cat1->setWeight('4.1');

$cat1->sayHello();