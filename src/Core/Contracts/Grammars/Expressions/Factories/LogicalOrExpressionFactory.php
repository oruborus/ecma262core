<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LogicalAndExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LogicalOrExpression;

interface LogicalOrExpressionFactory
{
    public function create(
        LogicalOrExpression $logicalOrExpression,
        LogicalAndExpression $logicalAndExpression
    ): LogicalOrExpression;
}
