<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;

interface NodeFactory
{
    /**
     * @template T of Node
     * @param class-string<T> $production
     * @return ?T
     */
    public function create(string $production, Agent $agent, Lexer $lexer, Parameters $parameters): ?Node;
}
