<?php

namespace Modules\Decorator\Entities;

class Client
{
    private $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function request()
    {
        $this->component->operation();
    }

}
