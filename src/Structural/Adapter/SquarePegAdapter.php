<?php


namespace App\Structural\Adapter;


class SquarePegAdapter implements RoundPegInterface
{
    /** @var SquarePeg */
    private $squarePeg;

    public function __construct(SquarePeg $squarePeg)
    {
        $this->squarePeg = $squarePeg;
    }

    public function getRadius(): int
    {
        return $this->squarePeg->getWidth() * sqrt(2) / 2;
    }
}