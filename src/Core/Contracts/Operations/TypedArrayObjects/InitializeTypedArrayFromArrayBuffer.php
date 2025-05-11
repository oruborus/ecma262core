<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypedArrayObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface InitializeTypedArrayFromArrayBuffer
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-initializetypedarrayfromarraybuffer
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $o, ObjectValue $buffer, LanguageValue $byteOffset, LanguageValue $length): null;
}
