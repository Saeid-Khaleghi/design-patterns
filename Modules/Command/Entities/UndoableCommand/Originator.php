<?php

namespace Modules\Command\Entities\UndoableCommand;

class Originator
{
    private $content;

    public function action()
    {
        $this->content = "Change: ".$this->content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }


}
