<?php

namespace Calculate;

use Mockery as m;

class MultiplyOperationTest extends \PHPUnit_Framework_TestCase
{
    public function getMultiplyOperation()
    {
        return new MultiplyOperation;
    }

    public function testMultiply()
    {
        $multiply = $this->getMultiplyOperation();

        $this->assertEquals(4, $multiply(2, 2));
        $this->assertEquals(6, $multiply(2, 3));
    }
}
