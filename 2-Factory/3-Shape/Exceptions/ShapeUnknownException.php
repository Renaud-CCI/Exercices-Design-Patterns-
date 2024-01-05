<?php

namespace App\Exceptions;

use PHPUnit\Framework\Exception;

class ShapeUnknownException extends Exception {
    public function __construct($message = "Unknown shape type", $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}