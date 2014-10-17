<?php

namespace Calculate;

use Mockery as m;

class AddOperationTest extends \PHPUnit_Framework_TestCase
{
    public function getAddOperation()
    {
        return new AddOperation;
    }

    public function testAdd()
    {
        $add = $this->getAddOperation();

        $this->assertEquals(4, $add(2, 2));
    }
}
