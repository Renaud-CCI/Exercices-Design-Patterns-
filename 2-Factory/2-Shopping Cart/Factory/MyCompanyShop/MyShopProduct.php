<?php

namespace App\Factory\MyCompanyShop;

use App\Factory\ShopingCartFramework\ProductInterface;


class MyShopProduct implements ProductInterface {
  private $name;
  private $description;

  public function __construct($name, $description) {
      $this->name = $name;
      $this->description = $description;
  }

  public function getShopProductCode() {
      return $this->name;
  }

  public function getShopDescription() {
      return $this->description;
  }

}