<?php
namespace App;

class FuelTankWarning  implements ObserverInterface {

    /**
     * It should be a private const(ant), but this is impossible in PHP 5.5
     * Maybe it'll be possible in the final version of PHP 7
     */
    const isFull = 100;
    const warnLevel = 5;

    /**
     * Handling a new Value
     *
     * @param $value
     * @throws Exception
     */
    public function newValue($value) {
        if ($value <= self::warnLevel) {
            $this->activateLED();
        } else {
            $this->deactivateLED();
        }
    }

    /**
     * Activating the Fuel Gauge LED
     */
    private function activateLED() {
        echo 'Fuel LED: on'."\n";
    }

    /**
     * Deactivating the Fuel Gauge LED
     */
    private function deactivateLED() {
        echo 'Fuel LED: off'."\n";
    }
}