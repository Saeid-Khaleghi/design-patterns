<?php

namespace Modules\ChainOfResponsibility\Entities;

class ConcreteHandler2 extends Handler
{
    public function handleRequest(Request $request)
    {
        if($request->getValue2() == 'World') {
            echo "HELLO WORLD"."<br>";
        }else if($request->getValue2() == 'Saeid') {
            echo "Hello Saeid"."<br>";
        }

        return false;
    }
}
