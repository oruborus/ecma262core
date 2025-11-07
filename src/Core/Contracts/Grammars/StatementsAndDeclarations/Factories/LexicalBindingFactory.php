<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BindingPattern;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LexicalBinding;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface LexicalBindingFactory
{
    public function createWithBindingIdentifier(
        BindingIdentifier $bindingIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LexicalBinding;

    public function createWithBindingIdentifierAndInitializer(
        BindingIdentifier $bindingIdentifier,
        Initializer $initializer,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LexicalBinding;

    public function createWithBindingPattern(
        BindingPattern $bindingPattern,
        Initializer $initializer,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): LexicalBinding;
}
