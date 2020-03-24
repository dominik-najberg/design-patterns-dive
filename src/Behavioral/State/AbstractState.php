<?php

namespace App\Behavioral\State;

abstract class AbstractState
{
    /** @var Door */
    protected $context;

    public function setContext(Door $context): void
    {
        $this->context = $context;
    }

    abstract public function close(): void;

    abstract public function open(): void;

    abstract public function lock(): void;

    abstract public function isClosed(): bool;

    abstract public function isLocked(): bool;
}