<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ExecutionContexts;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface GetNewTarget
{
    /**
     * @see https://tc39.es/ecma262/#sec-getnewtarget
     */
    public function __invoke(Agent $agent): UndefinedValue|ObjectValue;
}
