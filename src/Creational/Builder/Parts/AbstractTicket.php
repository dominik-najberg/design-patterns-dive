<?php


namespace App\Creational\Builder\Parts;


abstract class AbstractTicket
{
    /**
     * @var Characteristic[]
     */
    private $data = [];

    public function setCharacteristic(string $key, Characteristic $value): void
    {
        $this->data[$key] = $value;
    }

    abstract public function getDescription(): string;
}