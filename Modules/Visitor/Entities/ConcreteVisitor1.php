<?php

namespace Modules\Visitor\Entities;

class ConcreteVisitor1 implements Visitor
{
    public function visitElementA(ConcreteElementA $element)
    {
        echo "Visit Element A of ConcreteVisitor1"."<br>";
    }

    public function visitElementB(ConcreteElementB $element)
    {
        echo "Visit Element B of ConcreteVisitor1"."<br>";
    }
}
