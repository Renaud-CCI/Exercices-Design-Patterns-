<?php

namespace App\Builder;

use App\Builder\Interfaces\BuilderInterface;
use App\Builder\Interfaces\ComputerInterface;
use App\Builder\Parts\AbstractPart;

class PCBuilder implements BuilderInterface
{
  /**
   * @var AbstractPart[]
   */
  private $components = [];

  /**
   * @param AbstractPart $part
   * @return BuilderInterface
   */
  public function setPart(AbstractPart $part): BuilderInterface
{
    $this->components[$part::class] = $part;
    return $this;
}

  /**
   * @return ComputerInterface
   */
  public function getComputer(): ComputerInterface
{
    return new Desktop($this->components);
}

}
