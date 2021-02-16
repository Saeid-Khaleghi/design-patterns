<?php

namespace Modules\Decorator\Entities;

class ConcreteDecorator2 extends Decorator
{
    public function operation()
    {
        $this->addBehavior();
        return $this->component->operation();
    }

    private function addBehavior(){
        echo 'Behavior 2 added'."<br>";
    }
}
