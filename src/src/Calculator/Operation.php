<?php

namespace App\Calculator;

use Symfony\Component\Validator\Constraints as Assert;
use Exception;

class Operation
{
    /**
     * @Assert\PositiveOrZero
     * @Assert\Type(
     *     type="float",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    protected float $operand1 = 0;

    /**
     * @Assert\PositiveOrZero
     * @Assert\Type(
     *     type="float",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    protected float $operand2 = 0;
    protected string $operator = self::ADDITION;
    const ADDITION = "+";
    const SUBTRACTION = "-";
    const MULTIPLICATION = "*";
    const DIVISION = "/";

    /**
     * @return float
     */
    public function getOperand1(): float
    {
        return $this->operand1;
    }

    /**
     * @param float $operand1
     */
    public function setOperand1(float $operand1): void
    {
        $this->operand1 = $operand1;
    }

    /**
     * @return float
     */
    public function getOperand2(): float
    {
        return $this->operand2;
    }

    /**
     * @param float $operand2
     */
    public function setOperand2(float $operand2): void
    {
        $this->operand2 = $operand2;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     * @throws Exception
     */
    public function setOperator(string $operator): void
    {
        switch ($operator) {
            case self::ADDITION:
                $this->operator = self::ADDITION;
                break;
            case self::SUBTRACTION:
                $this->operator = self::SUBTRACTION;
                break;
            case self::MULTIPLICATION:
                $this->operator = self::MULTIPLICATION;
                break;
            case self::DIVISION:
                $this->operator = self::DIVISION;
                break;
            default:
                throw new Exception("Operator '$operator' is not supported");
        }
    }
}
