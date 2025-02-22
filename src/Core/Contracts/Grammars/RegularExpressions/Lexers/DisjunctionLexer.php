<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Disjunction;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface DisjunctionLexer
{
    /**
     * @see https://tc39.es/ecma262/#prod-Disjunction
     *
     * @throws ThrowCompletion
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?Disjunction;

    /**
     * @see https://tc39.es/ecma262/#prod-Disjunction
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Agent $agent, Lexer $lexer, Parameters $parameters): Disjunction;
}
