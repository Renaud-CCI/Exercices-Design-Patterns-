<?php

namespace App\Factory\MyCompanyShop;

use App\Factory\ShopingCartFramework\ProductFactoryInterface;

class MyShopProductFactory implements ProductFactoryInterface {
  private $database = [
      'BumperSticker1' => 'Cool bumper sticker',
      'CoffeeTableBook5' => 'Coffee Table book',
  ];

  public function createProduct($productName) {
      if (!isset($this->database[$productName])) {
          throw new \Exception("Product $productName does not exist in the database");
      }

      return new MyShopProduct($productName, $this->database[$productName]);
  }

}