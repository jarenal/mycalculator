<?php

namespace App\Calculator;

use Exception;

class ArithmeticOperationFactory
{
    /**
     * @param string $operator
     * @return ArithmeticOperation
     * @throws Exception
     */
    public static function create(string $operator): ArithmeticOperation
    {
        switch ($operator) {
            case Operation::ADDITION:
                return new Addition();
            case Operation::SUBTRACTION:
                return new Subtraction();
            case Operation::MULTIPLICATION:
                return new Multiplication();
            case Operation::DIVISION:
                return new Division();
            default:
                throw new Exception("Operator '$operator' is not supported");
        }
    }
}
