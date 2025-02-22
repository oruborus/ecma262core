<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierPart;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\UnicodeEscapeSequence;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface IdentifierPartFactory
{
    public function create(
        UnicodeEscapeSequence $unicodeEscapeSequence,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): IdentifierPart;
}
