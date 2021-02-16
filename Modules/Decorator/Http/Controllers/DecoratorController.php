<?php

namespace Modules\Decorator\Http\Controllers;

use Illuminate\View\Component;
use Modules\Decorator\Entities\Client;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Decorator\Entities\ConcreteComponent;
use Modules\Decorator\Entities\ConcreteDecorator1;
use Modules\Decorator\Entities\ConcreteDecorator2;

class DecoratorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $client = new Client(new ConcreteComponent());
        $client->request();
        echo '<hr>';
        $client = new Client(new ConcreteDecorator1(new ConcreteDecorator2(new ConcreteComponent())));
        $client->request();
    }
}
