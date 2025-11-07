<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyDefinition;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyName;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface PropertyDefinitionFactory
{
    public function createNamed(
        PropertyName $propertyName,
        AssignmentExpression $assignmentExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): PropertyDefinition;

    public function createSpread(
        AssignmentExpression $assignmentExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): PropertyDefinition;
}
