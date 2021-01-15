<?php

namespace Modules\Command\Entities\UndoableCommand;

class CareTaker
{
    private $commands = [];

    public function push(UndoableCommand $command)
    {
        $this->commands[] = $command;
    }

    /**
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->commands);
    }
}
