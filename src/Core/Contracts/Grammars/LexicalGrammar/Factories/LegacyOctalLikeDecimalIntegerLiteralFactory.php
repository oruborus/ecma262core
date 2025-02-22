<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LegacyOctalLikeDecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalDigit;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface LegacyOctalLikeDecimalIntegerLiteralFactory
{
    public function createFirst(
        OctalDigit $octalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): LegacyOctalLikeDecimalIntegerLiteral;

    public function create(
        LegacyOctalLikeDecimalIntegerLiteral $legacyOctalLikeDecimalIntegerLiteral,
        OctalDigit $octalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): LegacyOctalLikeDecimalIntegerLiteral;
}
