<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface ForInOfStatement extends IterationStatement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-forinofloopevaluation
     *
     * @throws AbruptCompletion
     */
    public function forInOfLoopEvaluation(ListValue $labelSet): LanguageValue;
}
