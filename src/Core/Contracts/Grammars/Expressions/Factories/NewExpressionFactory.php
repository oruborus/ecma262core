<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\NewExpression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface NewExpressionFactory
{
    public function create(
        NewExpression $newExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): NewExpression;
}
