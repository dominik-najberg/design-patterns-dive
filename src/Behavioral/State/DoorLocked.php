<?php


namespace App\Behavioral\State;


class DoorLocked extends AbstractState
{
    /**
     * @throws DoorException
     */
    public function close(): void
    {
        throw new DoorException('cannot be closed');
    }

    /**
     * @throws DoorException
     */
    public function open(): void
    {
        throw new DoorException('cannot be opened');
    }

    /**
     * @throws DoorException
     */
    public function lock(): void
    {
        throw new DoorException('cannot be locked');
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