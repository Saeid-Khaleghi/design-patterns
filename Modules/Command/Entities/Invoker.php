<?php

namespace Modules\Command\Entities;

class Invoker
{
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function invoke()
    {
        return $this->command->execute();
    }
}
