<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Identifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\IdentifierReference;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;

interface IdentifierReferenceFactory
{
    public function create(Identifier $identifier): IdentifierReference;

    public function createWithIdentifierName(IdentifierName $identifierName): IdentifierReference;
}
