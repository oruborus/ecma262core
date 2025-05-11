<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Values\ReturnCompletion;

interface ReturnStatement extends Statement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-return-statement-runtime-semantics-evaluation
     *
     * @throws ReturnCompletion
     */
    public function evaluate(): never;
}
