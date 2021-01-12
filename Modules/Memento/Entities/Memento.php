<?php

namespace Modules\Memento\Entities;

class Memento
{
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}
