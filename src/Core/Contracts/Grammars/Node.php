<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSourceTextMatched;
use Oru\EcmaScript\Core\Contracts\Values\Value;

// FIXME: Remove `Node` extend `HasSourceTextMatched` directly
interface Node extends HasSourceTextMatched
{
    /** @var Node[] $childNodes */
    public array $childNodes { get; }

    public function evaluate(Agent $agent): Value;
}
