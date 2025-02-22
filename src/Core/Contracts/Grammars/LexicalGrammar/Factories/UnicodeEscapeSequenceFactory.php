<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\CodePoint;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\Hex4Digits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\UnicodeEscapeSequence;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface UnicodeEscapeSequenceFactory
{
    public function createWithHex4Digits(
        Hex4Digits $hex4Digits,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): UnicodeEscapeSequence;

    public function createWithCodePoint(
        CodePoint $codePoint,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): UnicodeEscapeSequence;
}
