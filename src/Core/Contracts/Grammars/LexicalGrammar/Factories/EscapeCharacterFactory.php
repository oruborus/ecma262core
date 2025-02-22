<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\EscapeCharacter;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface EscapeCharacterFactory
{
    public function createX(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): EscapeCharacter;

    public function createU(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): EscapeCharacter;
}
