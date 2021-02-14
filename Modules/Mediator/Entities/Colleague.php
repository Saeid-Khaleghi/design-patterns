<?php

namespace Modules\Mediator\Entities;

class Colleague
{
    protected $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
