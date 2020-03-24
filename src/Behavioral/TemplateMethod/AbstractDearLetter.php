<?php


namespace App\Behavioral\TemplateMethod;


abstract class AbstractDearLetter
{
    /** @var string[] */
    private $letter = [];

    final public function createLetter(): string
    {
        $this->addLine($this->beginLetter());
        $this->addLine($this->addBody());
        $this->addLine($this->sayYouMissedThem());
        $this->addLine($this->endLetter());

        return implode("\n", $this->letter);
    }

    private function addLine($string): void
    {
        $this->letter[] = $string;
    }

    abstract protected function beginLetter(): string;

    private function addBody(): string
    {
        return 'I am thinking about you.';
    }

    protected function sayYouMissedThem(): ?string
    {
        return null;
    }

    private function endLetter(): string
    {
        return 'Hope to see you soon!';
    }
}