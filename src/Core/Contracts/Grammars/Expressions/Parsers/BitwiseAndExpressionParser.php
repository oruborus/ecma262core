<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseAndExpression;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface BitwiseAndExpressionParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-BitwiseANDExpression
     *
     * @throws ThrowCompletion 
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?BitwiseAndExpression;
}
