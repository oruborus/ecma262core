<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseOrExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LogicalAndExpression;

interface LogicalAndExpressionFactory
{
    public function create(
        LogicalAndExpression $logicalAndExpression,
        BitwiseOrExpression $bitwiseOrExpression,
    ): LogicalAndExpression;
}
