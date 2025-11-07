<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ExpressionFactory
{
    public function create(
        Expression $expression,
        AssignmentExpression $assignmentExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Expression;
}
