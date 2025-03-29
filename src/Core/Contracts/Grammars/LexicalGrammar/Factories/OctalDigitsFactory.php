<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalDigits;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface OctalDigitsFactory
{
    public function create(
        OctalDigits $octalDigits,
        OctalDigit $octalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): OctalDigits;
}
