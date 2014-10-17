<?php

namespace Calculate;

class DivideOperation implements OperationInterface
{
    public function __invoke($a, $b)
    {
        if ($b === 0) {
            throw new \Exception('Division by zero!');
        }
        return $a / $b;
    }

    public function getSymbol()
    {
        return '÷';
    }

    public function getName()
    {
        return 'divide';
    }
}
