<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\NewTarget;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface NewTargetParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-NewTarget
     *
     * @throws ThrowCompletion
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?NewTarget;
}
