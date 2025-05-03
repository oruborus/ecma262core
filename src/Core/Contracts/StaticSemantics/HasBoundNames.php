<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface HasBoundNames
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-boundnames
     *
     * @return ListValue<StringValue>
     */
    public function boundNames(Agent $agent): ListValue;
}
