<?php


namespace App\Creational\AbstractFactory;


class YoungHuman implements HumanInterface
{
    private $age = 3;

    public function sayHello()
    {
        return 'Hi. My name is Alex';
    }

    public function getAge(): int
    {
        return $this->age;
    }
}