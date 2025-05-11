<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;


interface HasCharacterValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-patterns-static-semantics-character-value
     */
    public function characterValue(): int;
}
