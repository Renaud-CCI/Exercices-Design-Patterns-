<?php

namespace App\Builder\Hardware;

use App\Builder\Parts\AbstractPart;

class Ram extends AbstractPart
{
    public function __construct(string $specification)
    {
        parent::__construct($specification);
    }
}