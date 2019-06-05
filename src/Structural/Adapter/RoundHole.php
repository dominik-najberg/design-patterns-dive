<?php


namespace App\Structural\Adapter;


class RoundHole
{
    /** @var int */
    private $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function fits(RoundPegInterface $roundPeg): bool
    {
        return $this->getRadius() >= $roundPeg->getRadius();
    }

    public function getRadius(): int
    {
        return $this->radius;
    }
}