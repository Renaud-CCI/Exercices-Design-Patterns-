<?php
namespace App;

interface ObserverInterface
{
    /**
     * Handling a new Value
     *
     * @param $value
     */
    public function newValue($value);
}