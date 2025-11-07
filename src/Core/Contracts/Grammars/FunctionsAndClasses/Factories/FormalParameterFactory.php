<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameter;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingElement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface FormalParameterFactory
{
    public function create(
        BindingElement $bindingElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FormalParameter;
}
