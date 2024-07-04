<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypedArrayObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface AllocateTypedArray
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-allocatetypedarray
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, StringValue $constructorName, ObjectValue $newTarget, StringValue $defaultProto, ?NumberValue $length = null): ObjectValue;
}
