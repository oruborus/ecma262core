<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface IterationStatement extends BreakableStatement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-loopevaluation
     *
     * @param ListValue<int, StringValue> $labelSet
     * @throws AbruptCompletion
     */
    public function loopEvaluation(Agent $agent, ListValue $labelSet): LanguageValue;
}
