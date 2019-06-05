<?php


namespace App\Structural\Adapter;


class SquarePeg implements SquarePegInterface
{
    /** @var int */
    private $width;

    public function __construct(int $width)
    {
        $this->width = $width;
    }

    public function getWidth(): int
    {
        return $this->width;
    }
}