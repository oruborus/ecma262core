<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\CoverParenthesizedExpressionAndArrowParameterList;
use Oru\EcmaScript\Core\Contracts\Lexer;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface CoverParenthesizedExpressionAndArrowParameterListParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-CoverParenthesizedExpressionAndArrowParameterList
     *
     * @throws ThrowCompletion
     */
    public function parse(Agent $agent, Lexer $lexer, Parameters $parameters): ?CoverParenthesizedExpressionAndArrowParameterList;
}
