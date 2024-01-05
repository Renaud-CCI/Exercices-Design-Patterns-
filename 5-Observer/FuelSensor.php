<?php
namespace App;

class FuelSensor extends ObservableAbstract implements ObserverInterface {
    private $fuelLevel;

    /**
     * Set the new Fuel Level
     *
     * @param $fuelLevel
     */
    public function setFuelLevel($fuelLevel){
      $this->fuelLevel = $fuelLevel;
      $this->notifyObserver($fuelLevel);
    }

    /**
     * Handle the new value
     *
     * @param $value
     */
    public function newValue($value){
      $this->setFuelLevel($value);
    }
}