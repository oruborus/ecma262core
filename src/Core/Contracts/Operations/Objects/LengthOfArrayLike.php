<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface LengthOfArrayLike
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-lengthofarraylike
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $obj): NumberValue;
}
