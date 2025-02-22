<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\CodePoint;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\Hex4Digits;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegExpUnicodeEscapeSequence;

interface RegExpUnicodeEscapeSequenceFactory
{
    public function createWithHexLeadAndTrailSurrogate(Hex4Digits $hexLeadSurrogate, Hex4Digits $hexTrailSurrogate): RegExpUnicodeEscapeSequence;

    public function createWithHexLeadSurrogate(Hex4Digits $hexLeadSurrogate): RegExpUnicodeEscapeSequence;

    public function createWithHexTrailSurrogate(Hex4Digits $hexTrailSurrogate): RegExpUnicodeEscapeSequence;

    public function createWithHexNonSurrogate(Hex4Digits $hexNonSurrogate): RegExpUnicodeEscapeSequence;

    public function createWithHex4Digits(Hex4Digits $hex4Digits): RegExpUnicodeEscapeSequence;

    public function createWithCodePoint(CodePoint $codePoint): RegExpUnicodeEscapeSequence;
}
