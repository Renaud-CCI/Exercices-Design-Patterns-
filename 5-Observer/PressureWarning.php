<?php
namespace App;

class PressureWarning implements ObserverInterface {
  public function newValue($value) {
      if ($value < 2.4 || $value > 2.7) {
          $this->activateRedLED();
      } else {
          $this->activateGreenLED();
      }
  }

  private function activateRedLED() {
      echo "Pressure Red LED activated\n";
  }

  private function activateGreenLED() {
      echo "Pressure Green LED activated\n";
  }
}