<?php
namespace App\Builder\Interfaces;

use App\Builder\Interfaces\MealBuilderInterface;
use App\Builder\Interfaces\MenuInterface;


interface MasterInterface
{
    public function build(): MenuInterface;

    public function getBuilder(): MealBuilderInterface;
    public function setBuilder(MealBuilderInterface $builder): MasterInterface;
}