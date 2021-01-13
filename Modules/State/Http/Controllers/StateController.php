<?php

namespace Modules\State\Http\Controllers;

use Modules\State\Entities\Context;
use Modules\State\Entities\ConcreteStateA;
use Modules\State\Entities\ConcreteStateB;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $context = new Context();

        $context->setState(new ConcreteStateA);
        echo $context->request();

        $context->setState(new ConcreteStateB);
        echo $context->request();
    }
}
