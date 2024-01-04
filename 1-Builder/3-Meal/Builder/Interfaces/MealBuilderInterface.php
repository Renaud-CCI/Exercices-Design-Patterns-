<?php

namespace App\Builder\Interfaces;

use App\Builder\Items\AbstractItem;
use App\Builder\Interfaces\MenuInterface;


interface MealBuilderInterface
{
    /**
     * @param AbstractItem $item
     * @return MealBuilderInterface
     */
    public function setItem(AbstractItem $item): MealBuilderInterface;

    /**
     * @return MenuInterface
     */
    public function getMenu(): MenuInterface;

    public function eraseMenu(): MealBuilderInterface;
}