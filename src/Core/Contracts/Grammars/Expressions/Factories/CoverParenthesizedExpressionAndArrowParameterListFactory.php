<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\CoverParenthesizedExpressionAndArrowParameterList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingPattern;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface CoverParenthesizedExpressionAndArrowParameterListFactory
{
    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CoverParenthesizedExpressionAndArrowParameterList;

    public function createWithBinding(
        BindingIdentifier|BindingPattern $binding,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CoverParenthesizedExpressionAndArrowParameterList;

    public function createWithExpression(
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CoverParenthesizedExpressionAndArrowParameterList;

    public function createWithExpressionAndBinding(
        Expression $expression,
        BindingIdentifier|BindingPattern $binding,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CoverParenthesizedExpressionAndArrowParameterList;
}
