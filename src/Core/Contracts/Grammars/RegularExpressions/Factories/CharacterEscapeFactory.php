<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexEscapeSequence;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\AsciiLetter;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterEscape;

interface CharacterEscapeFactory
{
    public function createZero(): CharacterEscape;

    public function createWithAsciiLetter(AsciiLetter $asciiLetter): CharacterEscape;

    public function createWithHexEscapeSequence(HexEscapeSequence $hexEscapeSequence): CharacterEscape;
}
