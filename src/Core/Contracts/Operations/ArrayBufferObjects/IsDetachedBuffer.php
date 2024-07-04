<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayBufferObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface IsDetachedBuffer
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-isdetachedbuffer
     */
    public function __invoke(Agent $agent, ObjectValue $arrayBuffer): BooleanValue;
}
