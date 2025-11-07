<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ParenthesizedExpression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ParenthesizedExpressionFactory
{
    public function create(
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ParenthesizedExpression;
}
