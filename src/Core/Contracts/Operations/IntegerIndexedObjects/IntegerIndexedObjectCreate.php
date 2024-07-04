<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IntegerIndexedObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface IntegerIndexedObjectCreate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-integerindexedobjectcreate
     */
    public function __invoke(Agent $agent, NullValue|ObjectValue $prototype): ObjectValue;
}
