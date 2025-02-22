<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ConditionalExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ShortCircuitExpression;

interface ConditionalExpressionFactory
{
    public function create(
        ShortCircuitExpression $shortCircuitExpression,
        AssignmentExpression $positive,
        AssignmentExpression $negative,
    ): ConditionalExpression;
}
