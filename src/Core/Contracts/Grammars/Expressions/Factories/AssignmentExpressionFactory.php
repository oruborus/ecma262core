<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LeftHandSideExpression;

interface AssignmentExpressionFactory
{
    /** @param "="|"*="|"/="|"%="|"+="|"-="|"<<="|">>="|">>>="|"&="|"^="|"|="|"**="|"&&="|"||="|"??=" $assignmentOperator */
    public function create(
        LeftHandSideExpression $leftHandSideExpression,
        string $assignmentOperator,
        AssignmentExpression $assignmentExpression,
    ): AssignmentExpression;
}
