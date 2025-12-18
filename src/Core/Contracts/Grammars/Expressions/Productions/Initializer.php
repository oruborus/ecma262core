<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface Initializer extends Node, HasContains
{
    /**
     * @throws AbruptCompletion
     */
    public function evaluate(): LanguageValue|ReferenceRecord;

    /**
     * @see https://tc39.es/ecma262/#sec-runtime-semantics-evaluatebody
     *
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function evaluateFunctionBody(ObjectValue $functionObject, ListValue $argumentsList): LanguageValue;

    public function getAssignmentExpression(): AssignmentExpression;
}
