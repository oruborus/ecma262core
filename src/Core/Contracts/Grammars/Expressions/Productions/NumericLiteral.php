<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface NumericLiteral extends Literal
{
    public function numericValue(Agent $agent): NumberValue;
}
