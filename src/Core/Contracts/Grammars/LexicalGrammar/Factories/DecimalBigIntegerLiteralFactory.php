<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalBigIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonZeroDigit;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface DecimalBigIntegerLiteralFactory
{
    public function create(
        NonZeroDigit $nonZeroDigit,
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalBigIntegerLiteral;

    public function createWithoutDecimalDigits(
        NonZeroDigit $nonZeroDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalBigIntegerLiteral;

    public function createZero(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalBigIntegerLiteral;
}
