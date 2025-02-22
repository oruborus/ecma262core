<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface AssignmentPattern extends Node
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-destructuringassignmentevaluation
     *
     * @throws AbruptCompletion
     */
    public function destructuringAssignmentEvaluation(Agent $agent, LanguageValue $value): LanguageValue;
}
