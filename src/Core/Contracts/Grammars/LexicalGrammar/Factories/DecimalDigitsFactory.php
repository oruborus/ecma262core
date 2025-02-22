<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface DecimalDigitsFactory
{
    public function create(
        DecimalDigits $decimalDigits,
        DecimalDigit $decimalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DecimalDigits;
}
