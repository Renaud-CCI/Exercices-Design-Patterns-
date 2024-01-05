<?php

namespace App\EnemyShip;

use App\HeroShip\HeroShipInterface;

class BigUfoEnemyShip implements EnemyShipInterface {
  public function attack(HeroShipInterface $ship) {
      $ship->takeDamage(40);
  }

  public function getName() {
      return 'a big ufo enemy ship';
  }
}