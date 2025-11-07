<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AdditiveExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MultiplicativeExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AdditiveExpressionFactory
{
    /** @param InputElementType::Plus|InputElementType::Minus $operator */
    public function create(
        AdditiveExpression $additiveExpression,
        InputElementType $operator,
        MultiplicativeExpression $multiplicativeExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AdditiveExpression;
}
