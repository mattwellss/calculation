<?php

namespace Calculate;

use Mockery as m;

class DivideOperationTest extends \PHPUnit_Framework_TestCase
{
    public function getDivideOperation()
    {
        return new DivideOperation;
    }

    public function testAdd()
    {
        $Divide = $this->getDivideOperation();

        $this->assertEquals(1, $Divide(2, 2));
    }

    public function testDivisonByZero()
    {
        $Divide = $this->getDivideOperation();

        try {
            $this->assertEquals(3, $Divide(6, 0));
        } catch (\Exception $e) {
            $this->assertEquals('Division by zero!', $e->getMessage());
        }
    }
}
