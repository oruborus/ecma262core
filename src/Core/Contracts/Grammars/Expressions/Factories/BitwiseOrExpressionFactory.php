<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseOrExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseXorExpression;

interface BitwiseOrExpressionFactory
{
    public function create(
        BitwiseOrExpression $bitwiseOrExpression,
        BitwiseXorExpression $bitwiseXorExpression,
    ): BitwiseOrExpression;
}
