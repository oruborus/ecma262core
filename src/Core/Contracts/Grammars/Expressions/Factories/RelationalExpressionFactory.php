<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\RelationalExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ShiftExpression;

interface RelationalExpressionFactory
{
    /** @param "<"|">"|"<="|">="|"instanceof"|"in" $relationalOperator */
    public function create(
        RelationalExpression $relationalExpression,
        string $relationalOperator,
        ShiftExpression $shiftExpression,
    ): RelationalExpression;
}
