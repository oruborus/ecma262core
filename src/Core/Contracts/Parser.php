<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\GoalSymbol;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface Parser
{
    /** 
     * @param GoalSymbol<Node> $goalSymbol
     *
     * @throws ThrowCompletion
     */
    public function parse(SourceCode $sourceCode, Position $position, GoalSymbol $goalSymbol): Node;
}
