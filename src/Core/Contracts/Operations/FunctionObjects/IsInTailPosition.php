<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Nodes\Node;

interface IsInTailPosition
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-isintailposition
     */
    public function __invoke(Agent $agent, Node $call): BooleanValue;
}
