<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface SwitchStatement extends BreakableStatement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-switch-statement-runtime-semantics-evaluation
     *
     * @throws AbruptCompletion
     */
    public function evaluate(Agent $agent): LanguageValue;
}
