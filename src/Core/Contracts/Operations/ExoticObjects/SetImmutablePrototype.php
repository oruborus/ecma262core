<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ExoticObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface SetImmutablePrototype
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-set-immutable-prototype
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $object, ObjectValue|NullValue $value): BooleanValue;
}
