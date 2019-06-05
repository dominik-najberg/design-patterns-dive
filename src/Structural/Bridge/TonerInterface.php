<?php


namespace App\Structural\Bridge;


interface TonerInterface
{
    public function format(string $string): string;
}