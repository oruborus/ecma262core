<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface FormalParameterList extends FormalParameters
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-hasinitializer
     */
    public function hasInitializer(Agent $agent): BooleanValue;
}