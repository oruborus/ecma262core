<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\PatternEvaluationResult;

interface CharacterClass extends Atom
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-characterclass
     */
    public function evaluate(Agent $agent): PatternEvaluationResult;
}
