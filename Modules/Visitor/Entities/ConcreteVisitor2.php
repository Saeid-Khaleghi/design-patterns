<?php

namespace Modules\Visitor\Entities;

class ConcreteVisitor2 implements Visitor
{
    public function visitElementA(ConcreteElementA $element)
    {
        echo "Visit Element A of ConcreteVisitor2"."<br>";
    }

    public function visitElementB(ConcreteElementB $element)
    {
        echo "Visit Element B of ConcreteVisitor2"."<br>";
    }
}
