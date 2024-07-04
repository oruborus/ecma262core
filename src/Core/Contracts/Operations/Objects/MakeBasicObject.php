<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\FieldName;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface MakeBasicObject
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-makebasicobject
     *
     * @param ListValue<int, FieldName> $internalSlotsList
     */
    public function __invoke(Agent $agent, ListValue $internalSlotsList): ObjectValue;
}
