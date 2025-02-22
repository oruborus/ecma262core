<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BreakCompletion;

interface BreakStatement extends Statement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-break-statement-runtime-semantics-evaluation
     *
     * @throws BreakCompletion
     */
    public function evaluate(Agent $agent): never;
}
