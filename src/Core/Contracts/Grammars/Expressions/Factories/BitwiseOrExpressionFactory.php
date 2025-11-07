<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseOrExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BitwiseXorExpression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BitwiseOrExpressionFactory
{
    public function create(
        BitwiseOrExpression $bitwiseOrExpression,
        BitwiseXorExpression $bitwiseXorExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BitwiseOrExpression;
}
