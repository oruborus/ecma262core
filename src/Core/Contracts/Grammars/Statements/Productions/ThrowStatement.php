<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;

interface ThrowStatement extends Statement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-throw-statement-runtime-semantics-evaluation
     *
     * @throws AbruptCompletion
     */
    public function evaluate(): never;
}
