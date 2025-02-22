<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalBigIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonZeroDigit;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface DecimalBigIntegerLiteralFactory
{
    public function create(
        NonZeroDigit $nonZeroDigit,
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DecimalBigIntegerLiteral;

    public function createWithoutDecimalDigits(
        NonZeroDigit $nonZeroDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DecimalBigIntegerLiteral;

    public function createZero(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DecimalBigIntegerLiteral;
}
