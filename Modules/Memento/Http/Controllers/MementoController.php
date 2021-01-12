<?php

namespace Modules\Memento\Http\Controllers;

use Modules\Memento\Entities\CareTaker;
use Modules\Memento\Entities\Originator;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MementoController extends Controller
{
    public function main()
    {
        $editor = New Originator();
        $history = new CareTaker();

        $editor->setState('Saeid');
        $history->push($editor->createMemento());
        echo $editor->getState() . "<br>";

        $editor->setState('Khaleghi');
        $history->push($editor->createMemento());
        echo $editor->getState() . "<br>";

        $editor->setState("Armin");
        echo $editor->getState() . "<br>";

        $editor->restore($history->pop());

        return $editor->getState();
    }
}
