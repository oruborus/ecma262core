<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes\RegularExpressions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\PatternResult;

interface Pattern extends RegularExpressionNode
{
    public function evaluate(Agent $agent): PatternResult;

    public function capturedParens(): int;
}
