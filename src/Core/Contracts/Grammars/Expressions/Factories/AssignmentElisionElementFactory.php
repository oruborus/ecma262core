<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElisionElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AssignmentElisionElementFactory
{
    public function create(
        Elision $elision,
        AssignmentElement $assignmentElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentElisionElement;
}
