<?php

namespace App\MyCompanyShop;

use App\ShopingCartFramework\ShopFactoryInterface;

class MyShopProductFactory implements ShopFactoryInterface {
  protected $productData;
  protected $shippingMethodData;

  public function __construct($productData, $shippingMethodData) {
      $this->productData = $productData;
      $this->shippingMethodData = $shippingMethodData;
  }

  public function createProduct($productCode) {
      if (!isset($this->productData[$productCode])) {
          throw new \Exception("Product code not found");
      }
      return new MyShopProduct($productCode, $this->productData[$productCode][0], $this->productData[$productCode][1]);
  }

  public function createShippingMethod($name) {
      if (!isset($this->shippingMethodData[$name])) {
          throw new \Exception("Shipping method not found");
      }
      return new MyShippingMethod($name, $this->shippingMethodData[$name][0], $this->shippingMethodData[$name][1]);
  }
}