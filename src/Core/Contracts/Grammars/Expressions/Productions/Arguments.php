<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface Arguments extends Node
{
    /**
     * @see https://tc39.es/ecma262/#sec-runtime-semantics-argumentlistevaluation
     *
     * @return ListValue<int, LanguageValue>
     * @throws AbruptCompletion
     */
    public function argumentListEvaluation(Agent $agent): ListValue;
}
