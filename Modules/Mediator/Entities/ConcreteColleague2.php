<?php

namespace Modules\Mediator\Entities;

class ConcreteColleague2 extends Colleague
{
    private $state2;

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state2;
    }

    /**
     * @param  mixed  $state2
     */
    public function setState($state2): void
    {
        $this->state2 = $state2;
        $this->mediator->mediate($this);
    }
}
