<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentRestElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\DestructuringAssignmentTarget;

interface AssignmentRestElementFactory
{
    public function create(DestructuringAssignmentTarget $destructuringAssignmentTarget): AssignmentRestElement;
}
