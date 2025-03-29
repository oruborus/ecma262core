<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\QuantifierEvaluationResult;

interface Quantifier extends RegularExpressionNode
{
    /** @see https://tc39.es/ecma262/#sec-compilequantifier */
    public function compileQuantifier(Agent $agent): QuantifierEvaluationResult;
}
