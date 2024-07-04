<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface ElementList extends Node
{
    /**
     * @throws AbruptCompletion
     */
    public function arrayAccumulation(Agent $agent, ObjectValue $array, NumberValue $nextIndex): NumberValue;
}
