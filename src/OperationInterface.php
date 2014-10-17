<?php

namespace Calculate;

interface OperationInterface
{
    public function __invoke($a, $b);
    public function getSymbol();
    public function getName();
}
