<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface NumberValue extends NumericValue
{
    public function getValue(): float;

    public function unit(): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-unaryMinus
     */
    public function unaryMinus(): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseNOT
     */
    public function bitwiseNot(): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-exponentiate
     */
    public function exponentiate(NumberValue $exponent): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-multiply
     */
    public function multiply(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-divide
     */
    public function divide(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-remainder
     */
    public function remainder(NumberValue $d): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-add
     */
    public function add(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-subtract
     */
    public function subtract(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-sameValue
     */
    public function sameValue(NumberValue $y): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-sameValueZero
     */
    public function sameValueZero(NumberValue $y): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-leftShift
     */
    public function leftShift(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-signedRightShift
     */
    public function signedRightShift(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-unsignedRightShift
     */
    public function unsignedRightShift(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-lessThan
     */
    public function lessThan(NumberValue $y): BooleanValue|UndefinedValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-equal
     */
    public function equal(NumberValue $y): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseOp
     */
    public function bitwiseOp(string $op, NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseAND
     */
    public function bitwiseAND(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseXOR
     */
    public function bitwiseXOR(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseOR
     */
    public function bitwiseOR(NumberValue $y): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-tostring
     */
    public function toString(): StringValue;
}
