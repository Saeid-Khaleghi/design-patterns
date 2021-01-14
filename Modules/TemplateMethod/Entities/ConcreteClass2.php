<?php

namespace Modules\TemplateMethod\Entities;

class ConcreteClass2 extends AbstractClass
{
    protected function primitive1()
    {
        return "Do primitive action 1 of concrete class 2";
    }

    protected function primitive2()
    {
        return "Do primitive action 2 of concrete class 2";
    }
}
