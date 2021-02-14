<?php

namespace Modules\Mediator\Entities;

class ConcreteMediator extends Mediator
{
    private $colleague1;
    private $colleague2;

    public function __construct()
    {
        $this->colleague1 = new ConcreteColleague1($this);
        $this->colleague2 = new ConcreteColleague2($this);
    }

    public function mediate(Colleague $colleague)
    {
        if($colleague instanceof ConcreteColleague1) {
            $this->logicAction1();
        }else if($colleague instanceof ConcreteColleague2) {
            $this->logicAction2();
        }else if(true){
            // and so on ...
        }
    }

    private function logicAction1()
    {
        $state1 = $this->colleague1->getState();
        if($state1 == 'Hello') {
            $this->colleague2->setState('World');
        }
    }

    private function logicAction2()
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
