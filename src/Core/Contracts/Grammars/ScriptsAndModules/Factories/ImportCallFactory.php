<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ImportCall;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ImportCallFactory
{
    public function create(
        AssignmentExpression $assignmentExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ImportCall;

    public function createWithSecondAssignmentExpression(
        AssignmentExpression $assignmentExpression1,
        AssignmentExpression $assignmentExpression2,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ImportCall;
}
