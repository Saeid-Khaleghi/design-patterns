<?php

namespace Modules\Observer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Observer\Entities\ConcreteSubject;
use Modules\Observer\Entities\ConcreteObserver1;
use Modules\Observer\Entities\ConcreteObserver2;

class ObserverController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $subject = new ConcreteSubject();

        $observer1 = new ConcreteObserver1($subject);
        $observer2 = new ConcreteObserver1($subject);
        $observer3 = new ConcreteObserver2($subject);

        $subject->attach($observer1);
        $subject->attach($observer2);
        $subject->attach($observer3);

        $subject->setState(123);
        echo "---------------------<br>";
        $subject->setState(456);

    }
}
