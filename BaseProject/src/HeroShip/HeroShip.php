<?php

namespace App\HeroShip;

class HeroShip implements HeroShipInterface {
    public $points;

    public function __construct($points) {
        $this->points = $points;
    }

    public function takeDamage($damage) {
        $this->points -= $damage;
        return $this;
    }

    public function getPoints() : int {
        return $this->points;
    }
}