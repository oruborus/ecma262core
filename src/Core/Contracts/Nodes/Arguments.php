<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface Arguments extends Node
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-argumentlistevaluation
     *
     * @return ListValue<int, LanguageValue>
     * @throws AbruptCompletion
     */
    public function argumentListEvaluation(Agent $agent): ListValue;
}
