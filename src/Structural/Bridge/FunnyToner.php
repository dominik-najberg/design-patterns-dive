<?php


namespace App\Structural\Bridge;


class FunnyToner implements TonerInterface
{
    public function format(string $string): string
    {
        return "HA HA HA $string HAHAHA :-))";
    }

}