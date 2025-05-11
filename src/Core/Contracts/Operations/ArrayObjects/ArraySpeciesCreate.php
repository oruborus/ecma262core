<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface ArraySpeciesCreate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-arrayspeciescreate
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $originalArray, NumberValue $length): ObjectValue;
}
