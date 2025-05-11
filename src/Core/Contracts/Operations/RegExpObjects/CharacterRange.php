<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\CharSet;

interface CharacterRange
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-characterrange-abstract-operation
     */
    public function __invoke(CharSet $a, CharSet $b): CharSet;
}
