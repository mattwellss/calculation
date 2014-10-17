<?php

namespace Calculate;

class MultiplyOperation implements OperationInterface
{
    public function __invoke($a, $b)
    {
        return $a * $b;
    }

    public function getSymbol()
    {
        return '×';
    }

    public function getName()
    {
        return 'multiply';
    }
}
