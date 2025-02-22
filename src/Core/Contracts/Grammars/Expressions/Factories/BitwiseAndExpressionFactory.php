<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseAndExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\EqualityExpression;

interface BitwiseAndExpressionFactory
{
    public function create(
        BitwiseAndExpression $bitwiseAndExpression,
        EqualityExpression $equalityExpression,
    ): BitwiseAndExpression;
}
