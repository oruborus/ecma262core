<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentPropertyList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentRestProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ObjectAssignmentPattern;

interface ObjectAssignmentPatternFactory
{
    public function create(
        AssignmentPropertyList $assignmentPropertyList,
        ?AssignmentRestProperty $assignmentRestProperty,
    ): ObjectAssignmentPattern;

    public function createWithAssignmentRestProperty(
        AssignmentRestProperty $assignmentRestProperty,
    ): ObjectAssignmentPattern;

    public function createEmpty(): ObjectAssignmentPattern;
}
