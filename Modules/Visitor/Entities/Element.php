<?php

namespace Modules\Visitor\Entities;

interface Element
{
    public function accept(Visitor $visitor);
}
