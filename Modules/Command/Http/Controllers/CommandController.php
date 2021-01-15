<?php

namespace Modules\Command\Http\Controllers;

use Modules\Command\Entities\Invoker;
use Modules\Command\Entities\Receiver;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Command\Entities\ConcreteCommand;
use Modules\Command\Entities\UndoableCommand\CareTaker;
use Modules\Command\Entities\UndoableCommand\Originator;
use Modules\Command\Entities\UndoableCommand\ChangeCommand;
use Modules\Command\Entities\CompositeCommand\SampleCommand1;
use Modules\Command\Entities\CompositeCommand\SampleCommand2;
use Modules\Command\Entities\CompositeCommand\CompositeCommand;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $receiver = new Receiver();
        $command = new ConcreteCommand($receiver);
        $invoker = new Invoker($command);

        echo $invoker->invoke();

        echo "<hr>";

        $compositeCommand = new CompositeCommand();
        $compositeCommand->add(new SampleCommand1());
        $compositeCommand->add(new SampleCommand2());
        $compositeCommand->execute();

        echo "<hr>";

        $caretaker = new CareTaker();
        $originator = new Originator();
        $originator->setContent("Hello World");
        echo $originator->getContent()."<br>";

        $change_command = new ChangeCommand($originator, $caretaker);
        $change_command->execute();
        echo $originator->getContent()."<br>";
        $change_command->unexecute();
        echo $originator->getContent()."<br>";
    }

}
