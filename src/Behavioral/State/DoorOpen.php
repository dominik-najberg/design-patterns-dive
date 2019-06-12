<?php


namespace App\Behavioral\State;


class DoorOpen extends AbstractState
{
    public function close(): void
    {
        $this->context->transitionTo(new DoorClosed());
    }

    public function open(): void
    {
        throw new \Exception();
    }

    public function lock(): void
    {
        throw new \Exception();
    }

    public function isClosed(): bool
    {
        return false;
    }

    public function isLocked(): bool
    {
        return false;
    }
}