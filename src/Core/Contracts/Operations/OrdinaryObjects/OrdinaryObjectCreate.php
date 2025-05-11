<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\FieldName;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface OrdinaryObjectCreate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ordinaryobjectcreate
     *
     * @param ListValue<FieldName> $additionalInternalSlotsList
     */
    public function __invoke(ObjectValue|NullValue $prototype, ?ListValue $additionalInternalSlotsList = null): ObjectValue;
}
