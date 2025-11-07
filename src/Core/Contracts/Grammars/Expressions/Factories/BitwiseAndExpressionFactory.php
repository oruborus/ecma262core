<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseAndExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\EqualityExpression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BitwiseAndExpressionFactory
{
    public function create(
        BitwiseAndExpression $bitwiseAndExpression,
        EqualityExpression $equalityExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BitwiseAndExpression;
}
