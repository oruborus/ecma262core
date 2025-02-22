<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AdditiveExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ShiftExpression;

interface ShiftExpressionFactory
{
    /** @param "<<"|">>"|">>>" $shiftOperator */
    public function create(
        ShiftExpression $shiftExpression,
        string $shiftOperator,
        AdditiveExpression $additiveExpression,
    ): ShiftExpression;
}
