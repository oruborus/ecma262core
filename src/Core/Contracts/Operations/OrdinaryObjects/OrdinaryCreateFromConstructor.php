<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\FieldName;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface OrdinaryCreateFromConstructor
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ordinarycreatefromconstructor
     *
     * @param ?ListValue<FieldName> $internalSlotsList
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $constructor, StringValue $intrinsicDefaultProto, ?ListValue $internalSlotsList = null): ObjectValue;
}
