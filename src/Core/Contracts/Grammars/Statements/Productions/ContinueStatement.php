<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ContinueCompletion;

interface ContinueStatement extends Statement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-continue-statement-runtime-semantics-evaluation
     *
     * @throws ContinueCompletion
     */
    public function evaluate(Agent $agent): never;
}
