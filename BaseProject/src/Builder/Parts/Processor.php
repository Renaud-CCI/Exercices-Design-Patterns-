<?php

namespace App\Builder\Parts;

use App\Builder\Parts\AbstractPart;

abstract class Processor extends AbstractPart
{
    public function __construct(string $processor)
    {
        parent::__construct($processor);
    }
}
