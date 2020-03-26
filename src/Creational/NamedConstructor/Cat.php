<?php


namespace App\Creational\NamedConstructor;


class Cat
{
    /** @var string */
    private $name;

    /** @var string */
    private $colour;

    private function __construct(string $name, string $colour)
    {
        if (strlen($name) < 5) {
            throw new BadCatException('the name is too short');
        }
        $this->name = $name;

        $this->colour = $colour;
    }

    public static function create(string $name, string $colour): Cat
    {
        $self = new self($name, $colour);
        // logger->log(sprintf("new cat created: ", $self));

        return $self;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColour(): string
    {
        return $this->colour;
    }
}