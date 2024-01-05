<?php

namespace Tests;

use App\Factory\ShopingCartFramework\Shop;
use App\Factory\MyCompanyShop\MyShopProductFactory;

use PHPUnit\Framework\TestCase;

class MyCompanyShopTest extends TestCase
{

  private array $productsToList = ['BumperSticker1', 'CoffeeTableBook5'];

  private string $targetOutput = <<<EOS
  BumperSticker1 - Cool bumper sticker
  CoffeeTableBook5 - Coffee Table book
  EOS;

  public function testMyCompanyShop()
  {
    $shop = new Shop(new MyShopProductFactory);
    $this->assertEquals($this->targetOutput, $shop->listProducts($this->productsToList));
  }
}