<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AdditiveExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MultiplicativeExpression;

interface AdditiveExpressionFactory
{
    /** @param "+"|"-" $additiveOperator */
    public function create(
        AdditiveExpression $additiveExpression,
        string $additiveOperator,
        MultiplicativeExpression $multiplicativeExpression,
    ): AdditiveExpression;
}
