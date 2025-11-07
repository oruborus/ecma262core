<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ExponentiationExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MultiplicativeExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MultiplicativeOperator;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface MultiplicativeExpressionFactory
{
    public function create(
        MultiplicativeExpression $multiplicativeExpression,
        MultiplicativeOperator $multiplicativeOperator,
        ExponentiationExpression $exponentiationExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): MultiplicativeExpression;
}
