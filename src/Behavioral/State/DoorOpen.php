<?php


namespace App\Behavioral\State;


class DoorOpen extends AbstractState
{
    public function close(): void
    {
        $this->context->transitionTo(new DoorClosed());
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
        return false;
    }
}