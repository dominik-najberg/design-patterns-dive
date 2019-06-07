<?php


namespace App\Behavioral\TemplateMethod;


class DearMomLetter extends AbstractDearLetter
{
    protected function beginLetter(): string
    {
        return 'Dear Mom!';
    }

    protected function sayYouMissedThem(): ?string
    {
        return 'I miss you so much!';
    }
}