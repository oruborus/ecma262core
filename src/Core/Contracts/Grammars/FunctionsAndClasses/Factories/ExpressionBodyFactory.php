<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ExpressionBody;

interface ExpressionBodyFactory
{
    public function create(AssignmentExpression $assignmentExpression): ExpressionBody;
}
