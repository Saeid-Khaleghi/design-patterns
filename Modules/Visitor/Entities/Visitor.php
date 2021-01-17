<?php

namespace Modules\Visitor\Entities;

interface Visitor
{
    public function visitElementA(ConcreteElementA $element);
    public function visitElementB(ConcreteElementB $element);
}
