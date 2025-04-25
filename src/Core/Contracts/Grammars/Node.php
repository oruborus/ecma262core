<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSourceTextMatched;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\Value;

// FIXME: Remove `Node` extend `HasSourceTextMatched` and (a future) `HasContains` directly
interface Node extends HasSourceTextMatched
{
    /** @var Node[] $childNodes */
    public array $childNodes { get; }

    public function evaluate(Agent $agent): Value;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-contains
     */
    public function contains(Agent $agent, string|InputElementType $symbol): BooleanValue;
}
