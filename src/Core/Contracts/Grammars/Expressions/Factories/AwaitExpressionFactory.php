<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AwaitExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\UnaryExpression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AwaitExpressionFactory
{
    public function create(
        UnaryExpression $unaryExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AwaitExpression;
}
