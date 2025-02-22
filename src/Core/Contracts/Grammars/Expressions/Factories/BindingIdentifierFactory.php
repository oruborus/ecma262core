<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Identifier;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;

interface BindingIdentifierFactory
{
    public function createWithIdentifier(Identifier $identifier): BindingIdentifier;

    public function createWithIdentifierName(IdentifierName $identifierName): BindingIdentifier;
}
