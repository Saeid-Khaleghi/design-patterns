<?php

namespace Modules\Facade\Entities;

class Client2
{
    private $state2;

    public function request()
    {
        $facade = new Facade();
        return $facade->operation();
    }

    public function getState()
    {
        return $this->state2;
    }

    public function setState($state): void
    {
        $this->state2 = $state;
    }
}
