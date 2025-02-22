<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ArrayAssignmentPattern;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentRestElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;

interface ArrayAssignmentPatternFactory
{
    public function create(
        ?AssignmentElementList $assignmentElementList,
        ?Elision $elision,
        ?AssignmentRestElement $assignmentRestElement,
    ): ArrayAssignmentPattern;
}
