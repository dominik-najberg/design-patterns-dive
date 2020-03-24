<?php


namespace App\Behavioral\ChainOfResponsibilities;


class ColorPicker
{
    public const RED = 'red';
    public const GREEN = 'green';
    public const BLUE = 'blue';

    private $selectedColor;

    public function __construct($selectedColor)
    {
        $this->selectedColor = $selectedColor;
    }

    public function getSelectedColor()
    {
        return $this->selectedColor;
    }
}