<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentRestProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\DestructuringAssignmentTarget;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AssignmentRestPropertyFactory
{
    public function create(
        DestructuringAssignmentTarget $destructuringAssignmentTarget,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentRestProperty;
}
