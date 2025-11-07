<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseAndExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseXorExpression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BitwiseXorExpressionFactory
{
    public function create(
        BitwiseXorExpression $bitwiseXorExpression,
        BitwiseAndExpression $bitwiseAndExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BitwiseXorExpression;
}
