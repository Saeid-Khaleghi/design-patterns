<?php

namespace Modules\MediatorObserver\Entities;

use Closure;

class EventHandler implements Observer
{
    private $mediator;
    private $method;

    public function __construct(ConcreteMediator $mediator, $method)
    {
        $this->mediator = $mediator;
        $this->method = $method;
    }

    public function update()
    {
        $this->mediator->{$this->method}();
    }
}
