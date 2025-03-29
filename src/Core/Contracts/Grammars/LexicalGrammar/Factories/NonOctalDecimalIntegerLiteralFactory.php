<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LegacyOctalLikeDecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonOctalDecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonOctalDigit;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface NonOctalDecimalIntegerLiteralFactory
{
    public function create(
        NonOctalDecimalIntegerLiteral $nonOctalDecimalIntegerLiteral,
        DecimalDigit $decimalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NonOctalDecimalIntegerLiteral;

    public function createWithNonOctalDigit(
        NonOctalDigit $nonOctalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NonOctalDecimalIntegerLiteral;

    public function createWithLegacyOctalLikeDecimalIntegerLiteralAndNonOctalDigit(
        LegacyOctalLikeDecimalIntegerLiteral $legacyOctalLikeDecimalIntegerLiteral,
        NonOctalDigit $nonOctalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NonOctalDecimalIntegerLiteral;
}
