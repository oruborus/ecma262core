<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayBufferObjects;

use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\TypedArrayType;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface SetValueInBuffer
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-setvalueinbuffer
     */
    public function __invoke(ObjectValue $arrayBuffer, NumberValue $byteIndex, TypedArrayType $type, NumberValue|BigIntValue $value, BooleanValue $isTypedArray, string $order, ?BooleanValue $isLittleEndian = null): UndefinedValue;
}
