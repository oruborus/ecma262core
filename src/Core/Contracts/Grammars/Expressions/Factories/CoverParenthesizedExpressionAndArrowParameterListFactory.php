<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\CoverParenthesizedExpressionAndArrowParameterList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingPattern;

interface CoverParenthesizedExpressionAndArrowParameterListFactory
{
    public function createEmpty(): CoverParenthesizedExpressionAndArrowParameterList;

    public function createWithBinding(BindingIdentifier|BindingPattern $binding): CoverParenthesizedExpressionAndArrowParameterList;

    public function createWithExpression(Expression $expression): CoverParenthesizedExpressionAndArrowParameterList;

    public function createWithExpressionAndBinding(Expression $expression, BindingIdentifier|BindingPattern $binding): CoverParenthesizedExpressionAndArrowParameterList;
}
