<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DateObjects;

use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface MakeTime
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-maketime
     */
    public function __invoke(NumberValue $hour, NumberValue $min, NumberValue $sec, NumberValue $ms): NumberValue;
}
