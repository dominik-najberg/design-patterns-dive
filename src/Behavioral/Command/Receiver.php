<?php


namespace App\Behavioral\Command;


class Receiver
{
    private $output = [];

    public function write($string): void
    {
        $this->output[] = $string;
    }

    public function getOutput(): string
    {
        return implode("\n", $this->output);
    }
}