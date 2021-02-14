<?php

namespace Modules\Mediator\Entities;

class ConcreteColleague1 extends Colleague
{
    private $state1;

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state1;
    }

    /**
     * @param  mixed  $state1
     */
    public function setState($state1): void
    {
        $this->state1 = $state1;
        $this->mediator->mediate($this);
    }
}
