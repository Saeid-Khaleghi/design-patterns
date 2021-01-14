<?php

namespace Modules\TemplateMethod\Entities;

abstract class AbstractClass
{
    private $supplier;

    public function __construct(Supplier $supplier=null)
    {
        $this->supplier = $supplier ? $supplier : new Supplier();
    }

    public function templateMethod()
    {
        $result1 = $this->primitive1()."<br>";

        $supplier_result = $this->supplier->doSomething()."<br>";

        $result2 = $this->primitive2()."<br>";

        return $result1.$supplier_result.$result2;
    }

    protected abstract function primitive1();
    protected abstract function primitive2();
}
