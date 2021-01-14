<?php

namespace Modules\TemplateMethod\Entities;

class ConcreteClass1 extends AbstractClass
{
    protected function primitive1()
    {
        return "Do primitive action 1 of concrete class 1";
    }

    protected function primitive2()
    {
        return "Do primitive action 2 of concrete class 1";
    }
}
