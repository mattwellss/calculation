<?php

namespace Calculate;

use Mockery as m;

class CalculationTest extends \PHPUnit_Framework_TestCase
{

    protected function tearDown()
    {
        m::close();
    }

    protected function getCalculation()
    {
        return new Calculation;
    }

    public function testAddOperation()
    {
        $c = $this->getCalculation();
        $fakeOperation = m::Mock('Calculate\OperationInterface');
        $fakeOperation->shouldReceive('getName')->andReturn('test');

        $c->addOperation($fakeOperation);

        $this->assertInstanceOf('Calculate\OperationInterface', $c->getOperation('test'));
    }

    public function testBadAddoperation()
    {
        $c = $this->getCalculation();

        try {
            $c->addOperation('bad', new \stdClass);
            $this->assertTrue(false);
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }
}
