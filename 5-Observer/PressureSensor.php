<?php
namespace App;

class PressureSensor extends ObservableAbstract implements ObserverInterface {
  private $pressure;
  
  public function setPressure($pressure){
    $this->pressure = $pressure;
    $this->notifyObserver($pressure);
  }
  public function newValue($value)
  {
    $this->setPressure($value);
  }
}