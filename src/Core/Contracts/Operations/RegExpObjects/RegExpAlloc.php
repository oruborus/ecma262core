<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface RegExpAlloc
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-regexpalloc
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $newTarget): ObjectValue;
}
