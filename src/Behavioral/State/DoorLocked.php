<?php


namespace App\Behavioral\State;


class DoorLocked extends AbstractState
{
    public function close(): void
    {
        throw new \Exception();
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
        return true;
    }
}