<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Nodes\Node;
use Oru\EcmaScript\Core\Contracts\Values\GoalSymbol;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface Parser
{
    /**
     * @template TNode of Node
     * @param ListValue<int, int> $sourceText
     * @param GoalSymbol<TNode> $goalSymbol
     * @return TNode|ListValue<int, ObjectValue>
     */
    public function parse(Agent $agent, ListValue $sourceText, GoalSymbol $goalSymbol): Node|ListValue;

    /**
     * @template TReturn
     * @param callable():TReturn $fn
     * @return TReturn
     */
    public function scoped(callable $fn, bool $strict = false, bool $inFunction = false, bool $inIterationOrSwitchStatement = false, ?string $label = null, bool $inEval = false): mixed;

    public function isStrictCode(): bool;

    /**
     * @return string[]
     */
    public function currentLabelSet(): array;

    public function inIterationOrSwitchStatement(): bool;

    public function inEval(): bool;
}
