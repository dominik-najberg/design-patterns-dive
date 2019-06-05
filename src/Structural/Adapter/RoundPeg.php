<?php


namespace App\Structural\Adapter;


class RoundPeg implements RoundPegInterface
{
    /** @var int */
    private $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }
}