<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SignedInteger;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface SignedIntegerFactory
{
    /** @param 43|45 $sign */
    public function create(
        int $sign,
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): SignedInteger;
}
