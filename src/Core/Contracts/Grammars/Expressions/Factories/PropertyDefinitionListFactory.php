<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyDefinition;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyDefinitionList;

interface PropertyDefinitionListFactory
{
    public function create(
        PropertyDefinitionList $propertyDefinitionList,
        PropertyDefinition $propertyDefinition,
    ): PropertyDefinitionList;
}
