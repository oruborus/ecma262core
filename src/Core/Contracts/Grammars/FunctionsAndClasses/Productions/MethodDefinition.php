<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyDefinition;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\MethodDefinitionRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface MethodDefinition extends PropertyDefinition
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-methoddefinitionevaluation
     *
     * @throws AbruptCompletion
     */
    public function methodDefinitionEvaluation(Agent $agent, ObjectValue $object, BooleanValue $enumerable): LanguageValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-definemethod
     *
     * @throws AbruptCompletion
     */
    public function defineMethod(Agent $agent, ObjectValue $object, ObjectValue $functionPrototype): MethodDefinitionRecord;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-computedpropertycontains
     */
    function computedPropertyContains(Agent $agent, string|InputElementType $symbol): BooleanValue;
}
