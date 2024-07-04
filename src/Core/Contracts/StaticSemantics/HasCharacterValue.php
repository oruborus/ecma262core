<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Agent;

interface HasCharacterValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-patterns-static-semantics-character-value
     */
    public function characterValue(Agent $agent): int;
}
