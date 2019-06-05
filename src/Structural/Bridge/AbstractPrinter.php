<?php


namespace App\Structural\Bridge;


abstract class AbstractPrinter
{
    /** @var TonerInterface */
    protected $implementation;

    public function __construct(TonerInterface $implementation)
    {
        $this->implementation = $implementation;
    }

    public function setImplementation(TonerInterface $implementation): void
    {
        $this->implementation = $implementation;
    }

    abstract public function doPrint(): string;
}