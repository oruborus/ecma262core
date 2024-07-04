<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayBufferObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\TypedArrayType;

interface GetValueFromBuffer
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getvaluefrombuffer
     */
    public function __invoke(Agent $agent, ObjectValue $arrayBuffer, NumberValue $byteIndex, TypedArrayType $type, BooleanValue $isTypedArray, string $order, ?BooleanValue $isLittleEndian = null): NumberValue|BigIntValue;
}
