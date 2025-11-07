<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingElement;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingPattern;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BindingElementFactory
{
    public function create(
        BindingPattern $bindingPattern,
        Initializer $initializer,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BindingElement;
}
