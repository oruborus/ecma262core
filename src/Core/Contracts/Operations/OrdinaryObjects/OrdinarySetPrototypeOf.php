<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface OrdinarySetPrototypeOf
{
    /**
     * https://262.ecma-international.org/12.0/#sec-ordinarysetprototypeof
     */
    public function __invoke(Agent $agent, ObjectValue $object, ObjectValue|NullValue $value): BooleanValue;
}
