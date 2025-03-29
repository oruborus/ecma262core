<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\PatternResult;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface Pattern extends RegularExpressionNode, Node
{
    public function evaluate(Agent $agent): never;

    /** @var list<Atom> $captures */
    public array $captures { get; }

    public function countLeftCapturingParensWithin(): int;

    /** @see https://tc39.es/ecma262/#sec-compilepattern */
    public function compilePattern(Agent $agent, RegExpRecord $rer): PatternResult;
}
