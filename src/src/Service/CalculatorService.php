<?php

namespace App\Service;

use App\Calculator\ArithmeticOperationFactory;
use Exception;


class CalculatorService
{
    /**
     * @param float $operand1
     * @param float $operand2
     * @param string $operator
     * @return float
     * @throws Exception
     */
    public function calculate(float $operand1, float $operand2, string $operator): float
    {
        $operation = ArithmeticOperationFactory::create($operator);
        return $operation->execute($operand1, $operand2);
    }
}
