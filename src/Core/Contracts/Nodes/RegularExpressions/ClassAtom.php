<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes\RegularExpressions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasCharacterValue;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsCharacterClass;
use Oru\EcmaScript\Core\Contracts\Values\CharSet;

interface ClassAtom extends RegularExpressionNode, HasIsCharacterClass, HasCharacterValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-classatom
     */
    public function evaluate(Agent $agent): CharSet;
}
