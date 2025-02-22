<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ComputedPropertyName;

interface ComputedPropertyNameFactory
{
    public function create(AssignmentExpression $assignmentExpression): ComputedPropertyName;
}
