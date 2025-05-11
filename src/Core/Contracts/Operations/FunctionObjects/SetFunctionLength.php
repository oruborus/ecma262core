<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface SetFunctionLength
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-setfunctionlength
     */
    public function __invoke(ObjectValue $function, NumberValue $length): BooleanValue;
}
