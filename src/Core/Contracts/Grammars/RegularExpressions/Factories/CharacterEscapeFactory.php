<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\AsciiLetter;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterEscape;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface CharacterEscapeFactory
{
    public function createZero(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): CharacterEscape;

    public function createWithAsciiLetter(
        AsciiLetter $asciiLetter,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): CharacterEscape;
}
