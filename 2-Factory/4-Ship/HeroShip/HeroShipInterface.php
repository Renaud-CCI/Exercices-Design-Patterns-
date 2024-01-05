<?php

namespace App\HeroShip;

interface HeroShipInterface {

    public function __construct($points);

    public function takeDamage($damage);

    public function getPoints() : int;
}