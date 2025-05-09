<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\IteratorRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface Elision extends Node, HasContains
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-arrayaccumulation
     *
     * @throws AbruptCompletion
     */
    public function arrayAccumulation(Agent $agent, ObjectValue $array, NumberValue $nextIndex): NumberValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-iteratordestructuringassignmentevaluation
     *
     * @throws AbruptCompletion
     */
    public function iteratorDestructuringAssignmentEvaluation(Agent $agent, IteratorRecord $iteratorRecord): LanguageValue;
}
