<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface DoWhileStatement extends IterationStatement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-dowhileloopevaluation
     *
     * @throws AbruptCompletion
     */
    public function doWhileLoopEvaluation(Agent $agent, ListValue $labelSet): null|LanguageValue|ReferenceRecord;
}
