<?php

namespace Tests;


use App\MyCompanyShop\MyShopProductFactory;
use PHPUnit\Framework\TestCase;
use App\ShopingCartFramework\Shop;

class AbstractFactoryTest extends TestCase
{

  private $productData = [
    // id => [name, weight]
    'BumperSticker1' => ['Bumper Sticker Item #1', 1],
    'BumperSticker3' => ['Bumper Sticker Item #3', 1],
    'BumperSticker5' => ['Bumper Sticker Item #5', 1],
    'CoffeeTableBook6' => ['Coffee Table Book Item #6 (500 pages)', 5],
    'CoffeeTableBook7' => ['Coffee Table Book Item #7 (300 pages)', 3],
    'CoffeeTableBook9' => ['Coffee Table Book Item #9 (900 pages)', 9],
  ];

  private $shippingMethodData = [
    // code => [miles, weight]
    'UPS' => [1.4, 1.1],
    'FEXED' => [2.2, 1.3],
  ];

  public function testAbstractFactory()
  {
    
    $shop = new Shop(new MyShopProductFactory($this->productData, $this->shippingMethodData));

    $targetOutput = <<<EOS
BumperSticker1 - Bumper Sticker Item #1 / via: UPS, cost: $15.1
CoffeeTableBook6 - Coffee Table Book Item #6 (500 pages) / via: UPS, cost: $19.5
EOS;

    // simulation of Shopping Cart Listings Page

    $actualOutput = $shop->listProductsWithShippingCost(['BumperSticker1', 'CoffeeTableBook6'], 'UPS', 10);

    $this->assertEquals($targetOutput, $actualOutput);
  }


    

}