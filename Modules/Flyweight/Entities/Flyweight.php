<?php

namespace Modules\Flyweight\Entities;

interface Flyweight
{
    public function operation($extrinsicState);
}
