<?php


namespace App\Behavioral\TemplateMethod;


abstract class AbstractDearLetter
{
    /** @var string[] */
    private $letter = [];

    final public function createLetter()
    {
        $this->addLine($this->beginLetter());
        $this->addLine($this->addBody());
        $this->addLine($this->sayYouMissedThem());
        $this->addLine($this->endLetter());

        return join("\n", $this->letter);
    }

    private function addLine($string): void
    {
        $this->letter[] = $string;
    }

    abstract protected function beginLetter(): string;

    private function addBody()
    {
        return 'I am thinking about you.';
    }

    protected function sayYouMissedThem(): ?string
    {
        return null;
    }

    private function endLetter()
    {
        return 'Hope to see you soon!';
    }
}