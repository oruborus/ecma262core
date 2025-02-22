<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexDigits;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface HexDigitsFactory
{
    public function create(
        HexDigits $hexDigits,
        HexDigit $hexDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): HexDigits;
}
