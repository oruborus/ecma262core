<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\InputElements\InputElementType;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasSourceTextMatched;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\Value;

interface Node extends HasSourceTextMatched
{
    public static function create(Agent $agent, Lexer $lexer, NodeFactory $factory, Parameters $parameters): ?Node;

    public function evaluate(Agent $agent): Value;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-contains
     */
    public function contains(Agent $agent, string|InputElementType $symbol): BooleanValue;
}
