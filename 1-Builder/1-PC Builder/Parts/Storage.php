<?php

namespace App\Builder\Parts;

use App\Builder\Parts\AbstractPart;

abstract class Storage extends AbstractPart
{
    public function __construct(string $volume)
    {
        parent::__construct($volume);
    }
}
