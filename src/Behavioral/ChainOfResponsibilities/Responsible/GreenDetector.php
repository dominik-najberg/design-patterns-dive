<?php


namespace App\Behavioral\ChainOfResponsibilities\Responsible;


use App\Behavioral\ChainOfResponsibilities\ColorPicker;
use App\Behavioral\ChainOfResponsibilities\Handler;

class GreenDetector extends Handler
{
    protected function processing(ColorPicker $colorPicker): ?string
    {
        if (ColorPicker::GREEN === $colorPicker->getSelectedColor()) {
            return 'Green color detected!';
        }

        return null;
    }

}