<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BooleanLiteral;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;

interface BooleanLiteralParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-BooleanLiteral
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?BooleanLiteral;
}
