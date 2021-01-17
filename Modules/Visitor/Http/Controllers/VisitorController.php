<?php

namespace Modules\Visitor\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Visitor\Entities\Client;
use Illuminate\Contracts\Support\Renderable;
use Modules\Visitor\Entities\ConcreteElementA;
use Modules\Visitor\Entities\ConcreteElementB;
use Modules\Visitor\Entities\ConcreteVisitor1;
use Modules\Visitor\Entities\ConcreteVisitor2;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $client = new Client();

        $client->add(new ConcreteElementA());
        $client->add(new ConcreteElementB());

        $client->accept(new ConcreteVisitor1());
        echo "<br>";
        $client->accept(new ConcreteVisitor2());
    }
}
