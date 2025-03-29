<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonZeroDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\DecimalEscape;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface DecimalEscapeFactory
{
    public function create(
        NonZeroDigit $nonZeroDigit,
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalEscape;

    public function createWithNonZeroDigit(
        NonZeroDigit $nonZeroDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalEscape;
}
