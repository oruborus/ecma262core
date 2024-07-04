<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\InputElements\InputElementType;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasPropName;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface PropertyName extends Node, HasPropName
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-object-initializer-runtime-semantics-evaluation
     *
     * @throws AbruptCompletion
     */
    public function evaluate(Agent $agent): StringValue|SymbolValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-iscomputedpropertykey
     */
    public function isComputedPropertyKey(Agent $agent): BooleanValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-computedpropertycontains
     */
    function computedPropertyContains(Agent $agent, string|InputElementType $symbol): BooleanValue;
}
