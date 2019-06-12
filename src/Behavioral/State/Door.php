<?php


namespace App\Behavioral\State;


class Door
{
    /** @var AbstractState */
    private $state;

    public function __construct(AbstractState $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(AbstractState $state): void
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function close(): void
    {
        $this->state->close();
    }

    public function open(): void
    {
        $this->state->open();
    }

    public function lock(): void
    {
        $this->state->lock();
    }

    public function isClosed(): bool
    {
        return $this->state->isClosed();
    }

    public function isLocked(): bool
    {
        return $this->state->isLocked();
    }
}