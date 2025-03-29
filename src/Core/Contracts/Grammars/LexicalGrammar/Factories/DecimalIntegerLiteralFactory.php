<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonZeroDigit;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface DecimalIntegerLiteralFactory
{
    public function create(
        NonZeroDigit $nonZeroDigit,
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalIntegerLiteral;

    public function createZero(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalIntegerLiteral;
}
