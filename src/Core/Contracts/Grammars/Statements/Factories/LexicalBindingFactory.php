<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingPattern;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\LexicalBinding;

interface LexicalBindingFactory
{
    public function createWithBindingIdentifier(
        BindingIdentifier $bindingIdentifier,
        ?Initializer $initializer,
    ): LexicalBinding;

    public function createWithBindingPattern(
        BindingPattern $bindingPattern,
        Initializer $initializer,
    ): LexicalBinding;
}
