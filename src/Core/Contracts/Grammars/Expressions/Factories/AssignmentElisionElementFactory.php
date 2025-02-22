<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElisionElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;

interface AssignmentElisionElementFactory
{
    public function create(Elision $elision, AssignmentElement $assignmentElement): AssignmentElisionElement;
}
