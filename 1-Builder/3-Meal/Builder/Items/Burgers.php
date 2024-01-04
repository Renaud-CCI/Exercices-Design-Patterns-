<?php

namespace App\Builder\Items;

use App\Builder\Items\AbstractItem;

abstract class Burgers extends AbstractItem
{
    public function __construct(string $burger)
    {
        parent::__construct($burger);
    }
}
