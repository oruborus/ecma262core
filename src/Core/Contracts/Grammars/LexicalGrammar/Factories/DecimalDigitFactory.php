<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigit;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface DecimalDigitFactory
{
    public function create(
        int $decimalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalDigit;
}
