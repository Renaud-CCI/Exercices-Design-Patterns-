<?php

namespace App\Builder\Items;

abstract class AbstractItem
{
    private string $item;

    public function __construct(string $item)
    {
        $this->item = $item;
    }
    
    public function getItem(): string
    {
        return (string)$this->item;
    }
}