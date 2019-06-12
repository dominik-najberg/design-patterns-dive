<?php


namespace App\Behavioral\State;


class DoorClosed extends AbstractState
{
    public function close(): void
    {
        throw new \Exception();
    }

    public function open(): void
    {
        $this->context->transitionTo(new DoorOpen());
    }

    public function lock(): void
    {
        $this->context->transitionTo(new DoorLocked());
    }

    public function isClosed(): bool
    {
        return true;
    }

    public function isLocked(): bool
    {
        return false;
    }
}