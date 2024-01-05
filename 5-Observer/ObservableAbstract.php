<?php
namespace App;

abstract class ObservableAbstract {
    private $observers = array();

    /**
     * Add an Observer to the $observers Array
     *
     * @param $observer
     */
    final public function addObserver(ObserverInterface $observer){
      $this->observers[] = $observer;
    }

    /**
     * Remove an Observer from the $observers Array
     *
     * @param $observer
     */
    final public function removeObserver(ObserverInterface $observer){
      $key = array_search($observer, $this->observers, true);
      if ($key !== false) {
          unset($this->observers[$key]);
      }
    }

    /**
     * Notify all Observers about a new Value
     *
     * @param $value
     */
    final protected function notifyObserver($value){
      foreach ($this->observers as $observer) {
          $observer->newValue($value);
      }
  }
}