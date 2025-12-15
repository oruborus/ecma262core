<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface BigIntValue extends NumericValue
{
    public function unit(): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-unaryMinus
     */
    public function unaryMinus(): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseNOT
     */
    public function bitwiseNot(): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-exponentiate
     */
    public function exponentiate(BigIntValue $exponent): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-multiply
     */
    public function multiply(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-divide
     */
    public function divide(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-remainder
     */
    public function remainder(BigIntValue $d): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-add
     */
    public function add(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-subtract
     */
    public function subtract(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-sameValue
     */
    public function sameValue(BigIntValue $y): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-sameValueZero
     */
    public function sameValueZero(BigIntValue $y): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-leftShift
     */
    public function leftShift(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-signedRightShift
     */
    public function signedRightShift(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-unsignedRightShift
     */
    public function unsignedRightShift(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-lessThan
     */
    public function lessThan(BigIntValue $y): BooleanValue|UndefinedValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-equal
     */
    public function equal(BigIntValue $y): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseOp
     */
    public function bitwiseOp(string $op, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseAND
     */
    public function bitwiseAND(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseXOR
     */
    public function bitwiseXOR(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseOR
     */
    public function bitwiseOR(BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-tostring
     */
    public function toString(): StringValue;
}
