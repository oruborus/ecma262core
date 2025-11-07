<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasPropertyDefinitionEvaluation;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;

interface PropertyDefinitionList extends Node, HasContains, HasPropertyDefinitionEvaluation
{
    /**
     * @internal
     *
     * Represents the number of productions of the form PropertyDefinition : PropertyName : AssignmentExpression
     * where PropName of PropertyName is "__proto__".
     */
    public int $numberOfAssignedProtoDefinitions { get; }
}
