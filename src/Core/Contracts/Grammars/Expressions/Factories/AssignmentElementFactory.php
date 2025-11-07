<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\DestructuringAssignmentTarget;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AssignmentElementFactory
{
    public function create(
        DestructuringAssignmentTarget $destructuringAssignmentTarget,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentElement;

    public function createWithInitializer(
        DestructuringAssignmentTarget $destructuringAssignmentTarget,
        Initializer $initializer,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentElement;
}
