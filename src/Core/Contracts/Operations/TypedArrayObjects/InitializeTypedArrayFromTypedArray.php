<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypedArrayObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface InitializeTypedArrayFromTypedArray
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-initializetypedarrayfromtypedarray
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $o, ObjectValue $srcArray): null;
}
