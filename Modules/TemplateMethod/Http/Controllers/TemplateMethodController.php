<?php

namespace Modules\TemplateMethod\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\TemplateMethod\Entities\ConcreteClass1;
use Modules\TemplateMethod\Entities\ConcreteClass2;

class TemplateMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $concrete1 = new ConcreteClass1();
        echo $concrete1->templateMethod();

        echo "<br>";

        $concrete2 = new ConcreteClass2();
        echo $concrete2->templateMethod();
    }
}
