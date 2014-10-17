<?php

namespace Calculate;

use Mockery as m;

class SubtractOperationTest extends \PHPUnit_Framework_TestCase
{
    public function getSubtractOperation()
    {
        return new SubtractOperation;
    }

    public function testSubtract()
    {
        $subtract = $this->getSubtractOperation();

        $this->assertEquals(0, $subtract(2, 2));
    }
}
