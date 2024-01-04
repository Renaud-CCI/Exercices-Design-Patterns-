<?php

namespace App\Builder;

use App\Builder\Interfaces\MasterInterface;
use App\Builder\Interfaces\MealBuilderInterface;
use App\Builder\Interfaces\MenuInterface;

class Master implements MasterInterface
{
    /**
     * @var MealBuilderInterface
     */
    private $builder;

    /**
     * @return MenuInterface
     */
    public function build(): MenuInterface
    {
        return $this->builder->getMenu();
    }

    /**
     * @return MealBuilderInterface
     */
    public function getBuilder(): MealBuilderInterface
    {
        return $this->builder;
    }

    /**
     * @param MealBuilderInterface $builder
     */
    public function setBuilder(MealBuilderInterface $builder): MasterInterface
    {
        $this->builder = $builder;
        return $this;
    }
}