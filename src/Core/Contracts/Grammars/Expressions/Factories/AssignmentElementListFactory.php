<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElisionElement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AssignmentElementListFactory
{
    public function create(
        AssignmentElementList $assignmentElementList,
        AssignmentElisionElement $assignmentElisionElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentElementList;
}
