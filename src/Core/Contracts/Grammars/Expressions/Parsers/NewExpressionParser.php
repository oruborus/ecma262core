<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\NewExpression;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface NewExpressionParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-NewExpression
     *
     * @throws ThrowCompletion
     */
    public function parse(Lexer $lexer, Parameters $parameters): ?NewExpression;

    /**
     * @see https://tc39.es/ecma262/#prod-NewExpression
     *
     * @throws ThrowCompletion
     */
    public function parseOrFail(Lexer $lexer, Parameters $parameters): NewExpression;
}
