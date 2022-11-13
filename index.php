<?php

abstract class HumanAbstract
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getGreetings(): string;
    abstract public function getMyNameIs(): string;

    public function introduceYourself(): string
    {
        return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
    }
}

class RussianHuman extends HumanAbstract
{
    function getGreetings(): string
    {
       return 'Привет';
        
    }
    function getMyNameIs(): string
    {
        return 'меня зовут';
    }
}

class EnglishHuman extends HumanAbstract
{
    function getGreetings(): string
    {
       return 'Hello';
        
    }
    function getMyNameIs(): string
    {
        return 'my name is';
    }
}


$russianMan = new RussianHuman('Иван');
$englishMan = new EnglishHuman('David');

echo $russianMan->introduceYourself();
echo $englishMan->introduceYourself();
