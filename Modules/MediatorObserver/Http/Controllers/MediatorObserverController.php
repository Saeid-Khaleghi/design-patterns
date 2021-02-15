<?php

namespace Modules\MediatorObserver\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\MediatorObserver\Entities\ConcreteMediator;
use Modules\MediatorObserver\Entities\ConcreteMediatorBad;

class MediatorObserverController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $dialog = new ConcreteMediator();
        echo $dialog->simulate1()."<br>";
        echo $dialog->simulate2()."<br>";

        echo '<hr>';

        $dialog2 = new ConcreteMediatorBad();
        echo $dialog2->simulate1()."<br>";
        echo $dialog2->simulate2()."<br>";
    }
}
