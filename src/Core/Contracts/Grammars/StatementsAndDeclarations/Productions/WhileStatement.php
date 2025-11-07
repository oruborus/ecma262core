<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface WhileStatement extends IterationStatement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-whileloopevaluation
     *
     * @param ListValue<StringValue> $labelSet
     * @throws AbruptCompletion
     */
    public function whileLoopEvaluation(ListValue $labelSet): LanguageValue;
}
