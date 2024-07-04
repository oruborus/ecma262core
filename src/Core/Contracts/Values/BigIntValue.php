<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface BigIntValue extends NumericValue
{
    public function getValue(): string;

    public function unit(Agent $agent): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-unaryMinus
     */
    public function unaryMinus(Agent $agent): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseNOT
     */
    public function bitwiseNot(Agent $agent): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-exponentiate
     */
    public function exponentiate(Agent $agent, BigIntValue $exponent): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-multiply
     */
    public function multiply(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-divide
     */
    public function divide(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-remainder
     */
    public function remainder(Agent $agent, BigIntValue $d): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-add
     */
    public function add(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-subtract
     */
    public function subtract(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-sameValue
     */
    public function sameValue(Agent $agent, BigIntValue $y): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-sameValueZero
     */
    public function sameValueZero(Agent $agent, BigIntValue $y): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-leftShift
     */
    public function leftShift(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-signedRightShift
     */
    public function signedRightShift(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-unsignedRightShift
     */
    public function unsignedRightShift(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-lessThan
     */
    public function lessThan(Agent $agent, BigIntValue $y): BooleanValue|UndefinedValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-equal
     */
    public function equal(Agent $agent, BigIntValue $y): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseOp
     */
    public function bitwiseOp(Agent $agent, string $op, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseAND
     */
    public function bitwiseAND(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseXOR
     */
    public function bitwiseXOR(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-bitwiseOR
     */
    public function bitwiseOR(Agent $agent, BigIntValue $y): BigIntValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-numeric-types-number-tostring
     */
    public function toString(Agent $agent): StringValue;
}
