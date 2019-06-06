<?php


namespace App\Behavioral\ChainOfResponsibilities;


class ColorPicker
{
    const RED = 'red';
    const GREEN = 'green';
    const BLUE = 'blue';

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