<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\CodePoint;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NotCodePoint;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NotEscapeSequence;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface NotEscapeSequenceFactory
{
    public function createWithZeroDecimalDigit(
        DecimalDigit $decimalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;

    public function createWithX(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;

    public function createWithXHexDigit(
        HexDigit $hexDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;

    public function createWithU(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;

    public function createWithUHexDigit(
        HexDigit $hexDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;

    public function createWithUHexDigitHexDigit(
        HexDigit $hexDigit1,
        HexDigit $hexDigit2,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;

    public function createWithUHexDigitHexDigitHexDigit(
        HexDigit $hexDigit1,
        HexDigit $hexDigit2,
        HexDigit $hexDigit3,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;

    public function createWithULeftCurlyBrace(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;

    public function createWithULeftCurlyBraceNotCodePoint(
        NotCodePoint $notCodePoint,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;

    public function createWithULeftCurlyBraceCodePoint(
        CodePoint $codePoint,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NotEscapeSequence;
}
