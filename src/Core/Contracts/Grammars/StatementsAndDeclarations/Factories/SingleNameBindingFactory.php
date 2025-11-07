<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\SingleNameBinding;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface SingleNameBindingFactory
{
    public function create(
        BindingIdentifier $bindingIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): SingleNameBinding;

    public function createWithInitializer(
        BindingIdentifier $bindingIdentifier,
        Initializer $initializer,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): SingleNameBinding;
}
