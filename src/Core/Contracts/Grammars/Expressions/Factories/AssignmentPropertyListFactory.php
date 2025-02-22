<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentPropertyList;

interface AssignmentPropertyListFactory
{
    public function create(
        AssignmentPropertyList $assignmentPropertyList,
        AssignmentProperty $assignmentProperty,
    ): AssignmentPropertyList;
}
