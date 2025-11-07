<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentOperator;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LeftHandSideExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AssignmentExpressionFactory
{
    /** @param AssignmentOperator|InputElementType::Equals|InputElementType::DoubleAmpersandEquals|InputElementType::DoublePipeEquals|InputElementType::DoubleQuestionMarkEquals $assignmentOperator */
    public function create(
        LeftHandSideExpression $leftHandSideExpression,
        InputElementType|AssignmentOperator $assignmentOperator,
        AssignmentExpression $assignmentExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentExpression;
}
