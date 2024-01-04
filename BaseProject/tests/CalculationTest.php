<?php

namespace Tests;


use App\AdditionFactory;
use App\Interfaces\CalculationInterface;
use App\OperationFactory;
use App\SoustractionFactory;
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase
{

  /**
     * @var OperationFactory
     */
    private $factory;

  /**
     * @var CalculationInterface
     */
    private $calculation;

    public function testAdditionCalculation()
    {
        $this->factory = new AdditionFactory();
        $this->assertInstanceOf(OperationFactory::class, $this->factory);

        $this->calculation = $this->factory->create();
        $this->assertInstanceOf(CalculationInterface::class, $this->calculation);

        $result = $this->calculation->calculate(5, 3);
        echo '5+3 =' . $result;
        $this->assertEquals(8, $result);
    }

    public function testSoustractionCalculation()
    {
        $this->factory = new SoustractionFactory();
        $this->assertInstanceOf(OperationFactory::class, $this->factory);

        $this->calculation = $this->factory->create();
        $this->assertInstanceOf(CalculationInterface::class, $this->calculation);

        $result = $this->calculation->calculate(5, 3);
        echo '5-3 =' . $result;
        $this->assertEquals(2, $result);
    }
}
?>