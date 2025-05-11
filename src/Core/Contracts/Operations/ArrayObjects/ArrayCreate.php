<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayObjects;

use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface ArrayCreate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-arraycreate
     */
    public function __invoke(NumberValue $length, ?ObjectValue $proto = null): ObjectValue;
}
