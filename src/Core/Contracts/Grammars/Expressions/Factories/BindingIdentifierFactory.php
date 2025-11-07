<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Identifier;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BindingIdentifierFactory
{
    public function createWithIdentifier(
        Identifier $identifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BindingIdentifier;

    public function createWithYield(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BindingIdentifier;

    public function createWithAwait(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BindingIdentifier;
}
