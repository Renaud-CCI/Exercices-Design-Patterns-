<?php

namespace App\Builder;

use App\Builder\Interfaces\MenuInterface;
use App\Builder\Items\AbstractItem;

class Menu implements MenuInterface
{
  private $components;


  public function __construct(array $components)
  {
    $this->components = $components;
  }

  public function getComponent(string $item) : AbstractItem
  {
    return $this->components[$item];
  }
}