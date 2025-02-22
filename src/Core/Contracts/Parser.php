<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface Parser
{
    /** @throws ThrowCompletion */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): Node;
}
