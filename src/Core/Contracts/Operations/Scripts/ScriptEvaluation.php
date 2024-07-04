<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Scripts;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ScriptRecord;

interface ScriptEvaluation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-scriptevaluation
     * 
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ScriptRecord $scriptRecord): LanguageValue;
}
