<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\YieldExpression;

interface YieldExpressionFactory
{
    public function create(?AssignmentExpression $assignmentExpression): YieldExpression;

    public function createDelegating(AssignmentExpression $assignmentExpression): YieldExpression;

    public function createEmpty(): YieldExpression;
}
