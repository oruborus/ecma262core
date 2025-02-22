<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Identifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LabelIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;

interface LabelIdentifierFactory
{
    public function createWithIdentifier(Identifier $identifier): LabelIdentifier;

    public function createWithIdentifierName(IdentifierName $identifierName): LabelIdentifier;
}
