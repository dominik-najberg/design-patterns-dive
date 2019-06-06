<?php


namespace App\Behavioral\ChainOfResponsibilities\Responsible;


use App\Behavioral\ChainOfResponsibilities\ColorPicker;
use App\Behavioral\ChainOfResponsibilities\Handler;

class BlueDetector extends Handler
{
    protected function processing(ColorPicker $colorPicker)
    {
        if (ColorPicker::BLUE === $colorPicker->getSelectedColor()) {
            return 'Blue color detected!';
        }

        return null;
    }

}