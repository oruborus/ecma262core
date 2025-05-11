<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\GoalSymbol;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ParseText
{
    /**
     * @see https://tc39.es/ecma262/#sec-parsetext
     *
     * @template TNode of Node
     * @param StringValue|ListValue<int> $sourceText
     * @param GoalSymbol<TNode> $goalSymbol
     * @return TNode|ListValue<ObjectValue>
     */
    public function __invoke(StringValue|ListValue $sourceText, GoalSymbol $goalSymbol): Node|ListValue;
}
