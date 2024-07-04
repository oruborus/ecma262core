<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\ResolveRejectRecord;

interface CreateResolvingFunctions
{
    /**
     * @see https://tc39.es/ecma262/#sec-createresolvingfunctions
     */
    public function __invoke(Agent $agent, ObjectValue $promise): ResolveRejectRecord;
}
