<?php

namespace Modules\ChainOfResponsibility\Entities;

class ConcreteHandler1 extends Handler
{
    public function handleRequest(Request $request)
    {
        $isValidValue = ($request->getValue1() == 'Hello');

        echo "Received values: {$request->getValue1()} and {$request->getValue2()}"."<br>";

        return !$isValidValue;
    }
}
