<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ReturnStatement;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface ReturnStatementParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-ReturnStatement
     *
     * @throws ThrowCompletion
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?ReturnStatement;

    /**
     * @see https://tc39.es/ecma262/#prod-ReturnStatement
     *
     * @throws ThrowCompletion
     */
    public function parseConditional(Agent $agent, Lexer $lexer, Parameters $parameters): ?ReturnStatement;
}
