<?php

namespace App\Builder\Hardware;

use App\Builder\Parts\AbstractPart;

class MotherBoard extends AbstractPart
{
    public function __construct(string $chipset)
    {
        parent::__construct($chipset);
    }
}