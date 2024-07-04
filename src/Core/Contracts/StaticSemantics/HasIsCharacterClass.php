<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

interface HasIsCharacterClass
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-patterns-static-semantics-is-character-class
     */
    public function isCharacterClass(): bool;
}
