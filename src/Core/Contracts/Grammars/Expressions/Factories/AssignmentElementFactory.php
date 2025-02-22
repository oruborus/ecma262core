<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\DestructuringAssignmentTarget;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;

interface AssignmentElementFactory
{
    public function create(
        DestructuringAssignmentTarget $destructuringAssignmentTarget,
        ?Initializer $initializer,
    ): AssignmentElement;
}
