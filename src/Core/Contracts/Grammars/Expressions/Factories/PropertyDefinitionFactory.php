<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyDefinition;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyName;

interface PropertyDefinitionFactory
{
    public function createNamed(
        PropertyName $propertyName,
        AssignmentExpression $assignmentExpression,
    ): PropertyDefinition;

    public function createSpread(
        AssignmentExpression $assignmentExpression,
    ): PropertyDefinition;
}
