<?php

namespace Modules\Strategy\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Strategy\Entities\Context;
use Modules\Strategy\Entities\StrategyA;
use Modules\Strategy\Entities\StrategyB;
use Illuminate\Contracts\Support\Renderable;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $context = new Context();
        echo $context->operation(new StrategyA());
        echo "<br>";
        echo $context->operation(new StrategyB());
    }
}
