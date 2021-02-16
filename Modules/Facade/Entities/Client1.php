<?php

namespace Modules\Facade\Entities;

class Client1
{
    private $state1;

    public function request()
    {
        $facade = new Facade();
        return $facade->operation();
    }

    public function getState()
    {
        return $this->state1;
    }

    public function setState($state): void
    {
        $this->state1 = $state;
    }
}
