<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ObjectLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyDefinitionList;

interface ObjectLiteralFactory
{
    /** @param array<int, int> $sourceTextMatched */
    public function create(PropertyDefinitionList $propertyDefinitionList, array $sourceTextMatched): ObjectLiteral;

    /** @param array<int, int> $sourceTextMatched */
    public function createEmpty(array $sourceTextMatched): ObjectLiteral;
}
