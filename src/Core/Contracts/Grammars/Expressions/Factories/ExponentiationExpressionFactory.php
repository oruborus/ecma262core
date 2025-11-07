<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ExponentiationExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\UpdateExpression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ExponentiationExpressionFactory
{
    public function create(
        UpdateExpression $updateExpression,
        ExponentiationExpression $exponentiationExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExponentiationExpression;
}
