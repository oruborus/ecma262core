<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Pattern;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface PatternParser
{
    /** @see https://tc39.es/ecma262/#prod-Pattern */
    public function parse(Lexer $lexer, Parameters $parameters): Pattern;

    /**
     * @see https://tc39.es/ecma262/#prod-Pattern
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Lexer $lexer, Parameters $parameters): Pattern;
}
