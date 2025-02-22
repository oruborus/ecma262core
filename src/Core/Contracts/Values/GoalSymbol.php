<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Parameters;

/**
 * @template TNode of Node 
 */
interface GoalSymbol
{
    /**
     * @return class-string<TNode>
     */
    public function node(): string;

    public function parameters(): Parameters;
}
