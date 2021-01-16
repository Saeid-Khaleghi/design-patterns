<?php

namespace Modules\ChainOfResponsibility\Entities;

class ConcreteHandler3 extends Handler
{
    public function handleRequest(Request $request)
    {
        echo "Bye";

        return false;
    }
}
