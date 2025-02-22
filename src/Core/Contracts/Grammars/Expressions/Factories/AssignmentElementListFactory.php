<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElisionElement;

interface AssignmentElementListFactory
{
    public function create(
        AssignmentElementList $assignmentElementList,
        AssignmentElisionElement $assignmentElisionElement,
    ): AssignmentElementList;
}
