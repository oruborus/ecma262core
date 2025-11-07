<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingPattern;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\VariableDeclaration;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface VariableDeclarationFactory
{
    public function createWithBindingIdentifier(
        BindingIdentifier $bindingIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): VariableDeclaration;

    public function createWithBindingIdentifierAndInitializer(
        BindingIdentifier $bindingIdentifier,
        Initializer $initializer,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): VariableDeclaration;

    public function createWithBindingPattern(
        BindingPattern $bindingPattern,
        Initializer $initializer,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): VariableDeclaration;
}
