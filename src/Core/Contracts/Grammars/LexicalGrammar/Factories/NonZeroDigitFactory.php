<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonZeroDigit;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface NonZeroDigitFactory
{
    public function create(
        int $nonZeroDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NonZeroDigit;
}
