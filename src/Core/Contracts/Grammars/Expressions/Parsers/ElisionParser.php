<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;

interface ElisionParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-Elision
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?Elision;
}
