<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface Initializer extends Node, HasContains
{
    /**
     * @throws AbruptCompletion
     */
    public function evaluate(Agent $agent): LanguageValue|ReferenceRecord;

    public function getAssignmentExpression(): AssignmentExpression;
}
