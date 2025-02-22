<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigit;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface DecimalDigitFactory
{
    public function create(
        int $decimalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DecimalDigit;
}
