<?php

namespace Calculate;

class Calculation
{
    protected $operations = [];

    /**
     * Add an operation to the calculator
     * @param OperationInterface $operation
     */
    public function addOperation(OperationInterface $operation)
    {
        $this->operations[$operation->getName()] = $operation;
    }

    public function getOperation($operationName)
    {
        if (!isset($this->operations[$operationName])) {
            throw new \Exception("The operation \"{$operationName}\" is not supported!");
        }

        return $this->operations[$operationName];
    }

    public function getOperations()
    {
        return $this->operations;
    }
}
