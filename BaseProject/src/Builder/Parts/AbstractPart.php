<?php

namespace App\Builder\Parts;

abstract class AbstractPart
{
    /**
     * @var string
     */
    private $value;

    /**
     * AbstractPart constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }
    
    /**
     * @return string
     */
    public function getValue(): string
    {
        return (string)$this->value;
    }
}