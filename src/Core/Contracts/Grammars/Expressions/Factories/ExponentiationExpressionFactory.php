<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ExponentiationExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\UpdateExpression;

interface ExponentiationExpressionFactory
{
    public function create(
        UpdateExpression $updateExpression,
        ExponentiationExpression $exponentiationExpression,
    ): ExponentiationExpression;
}
