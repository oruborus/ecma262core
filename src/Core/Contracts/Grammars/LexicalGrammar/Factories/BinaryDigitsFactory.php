<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\BinaryDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\BinaryDigits;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface BinaryDigitsFactory
{
    public function create(
        BinaryDigits $binaryDigits,
        BinaryDigit $binaryDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): BinaryDigits;
}
