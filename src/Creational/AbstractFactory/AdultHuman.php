<?php


namespace App\Creational\AbstractFactory;


class AdultHuman implements HumanInterface
{
    private $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function sayHello(): string
    {
        return 'Blah. Blah. Blah.';
    }

    public function getAge()
    {
        return $this->age;
    }
}