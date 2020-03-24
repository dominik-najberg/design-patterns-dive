<?php

namespace App\Behavioral\ChainOfResponsibilities;

abstract class Handler
{
    /** @var Handler|null */
    private $nextHandler;

    public function setNext(Handler $handler): self
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    final public function handle(ColorPicker $colorPicker)
    {
        $processed = $this->processing($colorPicker);

        if (null === $processed && null !== $this->nextHandler) {
                $processed = $this->nextHandler->handle($colorPicker);
        }

        return $processed;
    }

    abstract protected function processing(ColorPicker $colorPicker);
}