<?php

namespace Modules\Mediator\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Mediator\Entities\ConcreteMediator;

class MediatorController extends Controller
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
    }

}
