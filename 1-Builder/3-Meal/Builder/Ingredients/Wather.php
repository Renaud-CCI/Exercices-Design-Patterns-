<?php

namespace App\Builder\Ingredients;

use App\Builder\Items\Drinks;

class Wather extends Drinks
{
    public function __construct($drink)
    {
        parent::__construct($drink);
    }
}