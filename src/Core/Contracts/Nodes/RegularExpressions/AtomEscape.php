<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes\RegularExpressions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface AtomEscape extends RegularExpressionNode
{
    public function evaluateWithDirection(Agent $agent, NumberValue $direction): Matcher;
}
