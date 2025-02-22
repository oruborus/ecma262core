<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasCharacterValue;
use Oru\EcmaScript\Core\Contracts\Values\CharSet;

interface CharacterEscape extends AtomEscape, HasCharacterValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-characterescape
     */
    public function evaluate(Agent $agent): CharSet;
}
