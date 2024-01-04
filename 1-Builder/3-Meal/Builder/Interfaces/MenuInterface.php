<?php

namespace App\Builder\Interfaces;

use App\Builder\Items\AbstractItem;

interface MenuInterface
{
    /**
     * @return array
     */
    public function getComponent(string $item): AbstractItem;
}