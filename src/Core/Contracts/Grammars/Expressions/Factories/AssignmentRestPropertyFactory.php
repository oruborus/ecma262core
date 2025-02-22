<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentRestProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\DestructuringAssignmentTarget;

interface AssignmentRestPropertyFactory
{
    public function create(DestructuringAssignmentTarget $destructuringAssignmentTarget): AssignmentRestProperty;
}
