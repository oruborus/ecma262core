<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyName;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingElement;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingProperty;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BindingPropertyFactory
{
    public function create(
        PropertyName $propertyName,
        BindingElement $bindingElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BindingProperty;
}
