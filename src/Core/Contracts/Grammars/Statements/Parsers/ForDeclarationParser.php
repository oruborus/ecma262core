<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ForDeclaration;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface ForDeclarationParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-ForDeclaration
     *
     * @throws ThrowCompletion
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?ForDeclaration;

    /**
     * @see https://tc39.es/ecma262/#prod-ForDeclaration
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Agent $agent, Lexer $lexer, Parameters $parameters): ForDeclaration;
}
