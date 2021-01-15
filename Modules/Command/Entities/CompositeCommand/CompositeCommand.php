<?php

namespace Modules\Command\Entities\CompositeCommand;

use Modules\Command\Entities\Command;

class CompositeCommand implements Command
{
    private $commands = [];

    public function add(Command $command)
    {
        $this->commands[] = $command;
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            echo $command->execute()."<br>";
        }
    }
}
