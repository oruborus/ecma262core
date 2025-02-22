<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\FourToSeven;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LegacyOctalEscapeSequence;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonZeroOctalDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\ZeroToThree;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface LegacyOctalEscapeSequenceFactory
{
    public function createNonZeroOctalDigit(
        NonZeroOctalDigit $nonZeroOctalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): LegacyOctalEscapeSequence;

    public function createZeroToThreeOctalDigit(
        ZeroToThree $zeroToThree,
        OctalDigit $octalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): LegacyOctalEscapeSequence;

    public function createFourToSevenOctalDigit(
        FourToSeven $fourToSeven,
        OctalDigit $octalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): LegacyOctalEscapeSequence;

    public function createZeroToThreeOctalDigitOctalDigit(
        ZeroToThree $zeroToThree,
        OctalDigit $octalDigit1,
        OctalDigit $octalDigit2,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): LegacyOctalEscapeSequence;

    public function createZero(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): LegacyOctalEscapeSequence;
}
