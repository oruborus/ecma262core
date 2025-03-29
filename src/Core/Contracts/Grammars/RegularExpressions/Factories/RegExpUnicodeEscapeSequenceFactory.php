<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\CodePoint;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\Hex4Digits;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\HexLeadSurrogate;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\HexNonSurrogate;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\HexTrailSurrogate;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegExpUnicodeEscapeSequence;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegExpUnicodeEscapeSequenceFactory
{
    public function createWithHexLeadAndTrailSurrogate(
        HexLeadSurrogate $hexLeadSurrogate,
        HexTrailSurrogate $hexTrailSurrogate,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpUnicodeEscapeSequence;

    public function createWithHexLeadSurrogate(
        HexLeadSurrogate $hexLeadSurrogate,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpUnicodeEscapeSequence;

    public function createWithHexTrailSurrogate(
        HexTrailSurrogate $hexTrailSurrogate,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpUnicodeEscapeSequence;

    public function createWithHexNonSurrogate(
        HexNonSurrogate $hexNonSurrogate,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpUnicodeEscapeSequence;

    public function createWithHex4Digits(
        Hex4Digits $hex4Digits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpUnicodeEscapeSequence;

    public function createWithCodePoint(
        CodePoint $codePoint,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpUnicodeEscapeSequence;
}
