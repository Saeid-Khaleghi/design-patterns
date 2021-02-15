<?php

namespace Modules\MediatorObserver\Entities;

class ConcreteMediatorBad
{
    private $colleague1;
    private $colleague2;

    public function __construct()
    {
        $this->colleague1 = new ConcreteColleague1();
        $this->colleague2 = new ConcreteColleague2();

        $this->colleague1->attach(new class($this) implements Observer {
            private $mediator;
            public function __construct(ConcreteMediatorBad $mediator)
            {
                $this->mediator = $mediator;
            }

            public function update()
            {
                $this->mediator->logicAction1();
            }
        });
        $this->colleague2->attach(new class($this) implements Observer {
            private $mediator;
            public function __construct(ConcreteMediatorBad $mediator)
            {
                $this->mediator = $mediator;
            }

            public function update()
            {
                $this->mediator->logicAction2();
            }
        });
    }

    public function logicAction1()
    {
        $state1 = $this->colleague1->getState();
        if($state1 == 'Hello') {
            $this->colleague2->setState('World');
        }
    }

    public function logicAction2()
    {
        $state2 = $this->colleague2->getState();
        if($state2 == 'Done') {
            $this->colleague1->setState('Action');
        }
    }

    public function simulate1()
    {
        $this->colleague1->setState('Hello');
        return $this->colleague2->getState();
    }

    public function simulate2()
    {
        $this->colleague2->setState('Done');
        return $this->colleague1->getState();
    }
}
