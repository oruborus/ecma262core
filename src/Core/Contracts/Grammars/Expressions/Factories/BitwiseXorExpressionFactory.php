<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseAndExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseXorExpression;

interface BitwiseXorExpressionFactory
{
    public function create(
        BitwiseXorExpression $bitwiseXorExpression,
        BitwiseAndExpression $bitwiseAndExpression
    ): BitwiseXorExpression;
}
