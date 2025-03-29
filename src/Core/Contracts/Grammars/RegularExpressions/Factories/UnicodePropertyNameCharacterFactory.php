<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\AsciiLetter;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\UnicodePropertyNameCharacter;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface UnicodePropertyNameCharacterFactory
{
    public function create(
        AsciiLetter $asciiLetter,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): UnicodePropertyNameCharacter;

    public function createWithDash(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): UnicodePropertyNameCharacter;
}
