<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\YieldExpression;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface YieldExpressionParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-YieldExpression
     *
     * @throws ThrowCompletion
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?YieldExpression;
}
