<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayBufferObjects;

use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\TypedArrayType;

interface NumericToRawBytes
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-numerictorawbytes
     *
     * @return ListValue<int>
     */
    public function __invoke(TypedArrayType $type, BigIntValue|NumberValue $value, BooleanValue $isLittleEndian): ListValue;
}
