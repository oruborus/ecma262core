<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes\RegularExpressions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\CharSet;

interface ClassRanges extends RegularExpressionNode
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-classranges
     */
    public function evaluate(Agent $agent): CharSet;
}
