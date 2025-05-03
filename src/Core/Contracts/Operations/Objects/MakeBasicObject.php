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
     * @see https://tc39.es/ecma262/#sec-makebasicobject
     *
     * @param ListValue<FieldName> $internalSlotsList
     */
    public function __invoke(Agent $agent, ListValue $internalSlotsList): ObjectValue;
}
