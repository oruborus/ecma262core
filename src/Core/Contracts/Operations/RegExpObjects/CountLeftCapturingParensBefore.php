<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegularExpressionNode;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface CountLeftCapturingParensBefore
{
    /** @see https://tc39.es/ecma262/#sec-countleftcapturingparensbefore */
    public function __invoke(Agent $agent, Node|RegularExpressionNode $node): NumberValue;
}
