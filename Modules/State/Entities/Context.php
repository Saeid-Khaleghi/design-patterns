<?php

namespace Modules\State\Entities;

class Context
{
    private $state;

    public function request()
    {
        return $this->state->handle();
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }
}
