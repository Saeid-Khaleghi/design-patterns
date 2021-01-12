<?php

namespace Modules\Memento\Entities;

class Originator
{
    private $state;

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function createMemento()
    {
        return new Memento($this->state);
    }

    public function restore(Memento $memento)
    {
        $this->state = $memento->getState();
    }


}
