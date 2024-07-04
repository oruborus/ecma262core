<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContainsExpression;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface UniqueFormalParameters extends HasContainsExpression, BindingElement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-expectedargumentcount
     */
    public function expectedArgumentCount(Agent $agent): NumberValue;
}
