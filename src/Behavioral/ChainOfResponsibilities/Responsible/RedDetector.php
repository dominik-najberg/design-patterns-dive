<?php


namespace App\Behavioral\ChainOfResponsibilities\Responsible;


use App\Behavioral\ChainOfResponsibilities\ColorPicker;
use App\Behavioral\ChainOfResponsibilities\Handler;

class RedDetector extends Handler
{
    protected function processing(ColorPicker $colorPicker)
    {
        if (ColorPicker::RED === $colorPicker->getSelectedColor()) {
            return 'Red color detected!';
        }

        return null;
    }

}