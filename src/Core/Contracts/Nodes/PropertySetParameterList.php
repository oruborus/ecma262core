<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface PropertySetParameterList extends Node
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-expectedargumentcount
     */
    public function expectedArgumentCount(Agent $agent): NumberValue;
}
