<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingElisionElement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BindingElementListFactory
{
    public function create(
        BindingElementList $bindingElementList,
        BindingElisionElement $bindingElisionElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BindingElementList;
}
