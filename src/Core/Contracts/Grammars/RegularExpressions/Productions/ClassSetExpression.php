<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\CharSet;

interface ClassSetExpression extends ClassContents
{
    /** @see https://tc39.es/ecma262/#prod-ClassSetExpression */
    public function evaluate(Agent $agent): CharSet;
}
