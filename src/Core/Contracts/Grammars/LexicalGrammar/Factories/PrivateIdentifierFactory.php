<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\PrivateIdentifier;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface PrivateIdentifierFactory
{
    public function create(
        IdentifierName $identifierName,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): PrivateIdentifier;
}
