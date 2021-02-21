<?php

namespace Modules\Bridge\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Bridge\Entities\RefinedAbstraction;
use Modules\Bridge\Entities\ConcreteImplementor1;
use Modules\Bridge\Entities\ConcreteImplementor2;

class BridgeController extends Controller
{
    public function index()
    {
        $abstraction = new RefinedAbstraction(new ConcreteImplementor1());
        echo $abstraction->operation();

        echo '<br>';

        $abstraction = new RefinedAbstraction(new ConcreteImplementor2());
        echo $abstraction->operation();
    }
}
