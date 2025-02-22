<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ExponentiationExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MultiplicativeExpression;

interface MultiplicativeExpressionFactory
{
    /** @param "*"|"/"|"%" $multiplicativeOperator */
    public function create(
        MultiplicativeExpression $multiplicativeExpression,
        string $multiplicativeOperator,
        ExponentiationExpression $exponentiationExpression,
    ): MultiplicativeExpression;
}
