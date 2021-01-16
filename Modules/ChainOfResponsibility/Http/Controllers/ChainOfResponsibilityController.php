<?php

namespace Modules\ChainOfResponsibility\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\ChainOfResponsibility\Entities\Client;
use Modules\ChainOfResponsibility\Entities\Request;
use Modules\ChainOfResponsibility\Entities\ConcreteHandler3;
use Modules\ChainOfResponsibility\Entities\ConcreteHandler2;
use Modules\ChainOfResponsibility\Entities\ConcreteHandler1;

class ChainOfResponsibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $handler3 = new ConcreteHandler3();
        $handler2 = new ConcreteHandler2($handler3);
        $handler1 = new ConcreteHandler1($handler2);

        $client = new Client($handler1);
        $client->handle(new Request("Hello", "World"));
    }
}
