<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingPropertyList;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BindingPropertyListFactory
{
    public function create(
        BindingPropertyList $bindingPropertyList,
        BindingProperty $bindingProperty,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BindingPropertyList;
}
