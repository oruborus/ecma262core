<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LegacyOctalLikeDecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalDigit;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface LegacyOctalLikeDecimalIntegerLiteralFactory
{
    public function createFirst(
        OctalDigit $octalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): LegacyOctalLikeDecimalIntegerLiteral;

    public function create(
        LegacyOctalLikeDecimalIntegerLiteral $legacyOctalLikeDecimalIntegerLiteral,
        OctalDigit $octalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): LegacyOctalLikeDecimalIntegerLiteral;
}
