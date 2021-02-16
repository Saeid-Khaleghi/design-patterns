<?php

namespace Modules\Decorator\Entities;

class ConcreteDecorator1 extends Decorator
{
    public function operation()
    {
        $this->addBehavior();
        return $this->component->operation();
    }

    private function addBehavior(){
        echo 'Behavior 1 added'."<br>";
    }
}
