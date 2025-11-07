<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentPropertyList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentRestProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ObjectAssignmentPattern;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ObjectAssignmentPatternFactory
{
    public function create(
        AssignmentPropertyList $assignmentPropertyList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ObjectAssignmentPattern;

    public function createWithAssignmentPropertyListAndAssignmentRestProperty(
        AssignmentPropertyList $assignmentPropertyList,
        AssignmentRestProperty $assignmentRestProperty,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ObjectAssignmentPattern;

    public function createWithAssignmentRestProperty(
        AssignmentRestProperty $assignmentRestProperty,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ObjectAssignmentPattern;

    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ObjectAssignmentPattern;
}
