<?php
namespace App\Builder\Interfaces;

use App\Builder\Interfaces\BuilderInterface;
use App\Builder\Interfaces\ComputerInterface;


interface MasterInterface
{
    /**
     * @return ComputerInterface
     */
    public function build(): ComputerInterface;

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface;

    /**
     * @param BuilderInterface $builder
     */
    public function setBuilder(BuilderInterface $builder): MasterInterface;
}