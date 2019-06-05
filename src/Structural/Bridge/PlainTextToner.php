<?php


namespace App\Structural\Bridge;


class PlainTextToner implements TonerInterface
{
    public function format(string $string): string
    {
        return $string;
    }
}