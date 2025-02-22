<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface Assertion extends Term
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-assertion
     */
    public function evaluate(Agent $agent): Matcher;

    public function capturedParens(): int;

    public function evaluateWithDirection(Agent $agent, NumberValue $direction): Matcher;
}
