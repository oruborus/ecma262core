<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\Direction;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface Term extends RegularExpressionNode
{
    public function countLeftCapturingParensWithin(): int;

    /** @see https://tc39.es/ecma262/#sec-compilesubpattern */
    public function compileSubpattern(Agent $agent, RegExpRecord $rer, Direction $direction): Matcher;
}
