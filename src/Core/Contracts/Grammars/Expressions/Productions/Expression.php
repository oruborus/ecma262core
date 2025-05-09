<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface Expression extends Node, HasContains
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-comma-operator-runtime-semantics-evaluation
     *
     * @throws AbruptCompletion
     */
    public function evaluate(Agent $agent): LanguageValue|ReferenceRecord;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-assignmenttargettype
     */
    public function assignmentTargetType(Agent $agent): AssignmentTargetType;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-isfunctiondefinition
     */
    public function isFunctionDefinition(Agent $agent): BooleanValue;
}
