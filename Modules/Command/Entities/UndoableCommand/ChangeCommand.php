<?php

namespace Modules\Command\Entities\UndoableCommand;

class ChangeCommand implements UndoableCommand
{
    private $prevContent;
    private $originator;
    private $caretaker;

    public function __construct($originator, $caretaker)
    {
        $this->originator = $originator;
        $this->caretaker = $caretaker;
    }

    public function execute()
    {
        $this->prevContent = $this->originator->getContent();
        $this->originator->action();
        $this->caretaker->push($this);
    }

    public function unexecute()
    {
        $this->originator->setContent($this->prevContent);
    }
}
