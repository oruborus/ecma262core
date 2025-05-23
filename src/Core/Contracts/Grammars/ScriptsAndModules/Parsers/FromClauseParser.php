<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\FromClause;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface FromClauseParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-FromClause
     *
     * @throws ThrowCompletion
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?FromClause;

    /**
     * @see https://tc39.es/ecma262/#prod-FromClause
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Lexer $lexer, Parameters $parameters): FromClause;
}
