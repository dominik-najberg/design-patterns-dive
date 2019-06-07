<?php


namespace App\Behavioral\Command;


class Receiver
{
    private $output = [];

    public function write($string)
    {
        $this->output[] = $string;
    }

    public function getOutput(): string
    {
        return join("\n", $this->output);
    }
}