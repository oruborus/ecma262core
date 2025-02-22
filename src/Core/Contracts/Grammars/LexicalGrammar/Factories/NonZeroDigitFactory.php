<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonZeroDigit;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface NonZeroDigitFactory
{
    public function create(
        int $nonZeroDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): NonZeroDigit;
}
