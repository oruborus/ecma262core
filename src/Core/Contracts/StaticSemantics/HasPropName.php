<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface HasPropName
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-propname
     */
    public function propName(Agent $agent): ?StringValue;
}
