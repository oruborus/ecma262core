<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasPropName;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface ClassElementName extends Node, HasContains, HasPropName
{
    /**
     * @see https://tc39.es/ecma262/#sec-class-definitions-runtime-semantics-evaluation
     *
     * @throws AbruptCompletion
     */
    public function evaluate(Agent $agent): StringValue|SymbolValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-computedpropertycontains
     */
    function computedPropertyContains(Agent $agent, string|InputElementType $symbol): BooleanValue;
}
