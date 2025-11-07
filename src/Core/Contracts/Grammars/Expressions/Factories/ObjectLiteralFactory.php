<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ObjectLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyDefinitionList;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ObjectLiteralFactory
{
    public function create(
        PropertyDefinitionList $propertyDefinitionList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
        Parameters $parameters,
    ): ObjectLiteral;

    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
        Parameters $parameters,
    ): ObjectLiteral;
}
