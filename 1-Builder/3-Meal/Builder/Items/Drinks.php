<?php

namespace App\Builder\Items;

use App\Builder\Items\AbstractItem;

abstract class Drinks extends AbstractItem
{
    public function __construct(string $drink)
    {
        parent::__construct($drink);
    }
}