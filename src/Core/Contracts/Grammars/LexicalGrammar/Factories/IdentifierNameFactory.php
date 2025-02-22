<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierPart;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface IdentifierNameFactory
{
    public function create(
        IdentifierName $identifierName,
        IdentifierPart $identifierPart,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): IdentifierName;
}
