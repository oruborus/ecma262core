<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface HasNumericValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-numericvalue
     */
    public function numericValue(Agent $agent): NumberValue|BigIntValue;
}
