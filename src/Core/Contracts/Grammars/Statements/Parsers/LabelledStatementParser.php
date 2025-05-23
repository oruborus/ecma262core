<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\LabelledStatement;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;

interface LabelledStatementParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-LabelledStatement
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?LabelledStatement;
}
