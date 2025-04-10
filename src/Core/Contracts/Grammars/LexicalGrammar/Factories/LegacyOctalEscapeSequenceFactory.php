<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\FourToSeven;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LegacyOctalEscapeSequence;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonZeroOctalDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\ZeroToThree;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface LegacyOctalEscapeSequenceFactory
{
    public function createNonZeroOctalDigit(
        NonZeroOctalDigit $nonZeroOctalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): LegacyOctalEscapeSequence;

    public function createZeroToThreeOctalDigit(
        ZeroToThree $zeroToThree,
        OctalDigit $octalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): LegacyOctalEscapeSequence;

    public function createFourToSevenOctalDigit(
        FourToSeven $fourToSeven,
        OctalDigit $octalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): LegacyOctalEscapeSequence;

    public function createZeroToThreeOctalDigitOctalDigit(
        ZeroToThree $zeroToThree,
        OctalDigit $octalDigit1,
        OctalDigit $octalDigit2,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): LegacyOctalEscapeSequence;

    public function createZero(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): LegacyOctalEscapeSequence;
}
