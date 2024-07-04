<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\InputElements\InputElementType;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface ClassElementList extends ClassBody
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-computedpropertycontains
     */
    function computedPropertyContains(Agent $agent, string|InputElementType $symbol): BooleanValue;
}
