<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonZeroDigit;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface DecimalIntegerLiteralFactory
{
    public function create(
        NonZeroDigit $nonZeroDigit,
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DecimalIntegerLiteral;

    public function createZero(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DecimalIntegerLiteral;
}
