<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LegacyOctalLikeDecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonOctalDecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonOctalDigit;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface NonOctalDecimalIntegerLiteralFactory
{
    public function create(
        NonOctalDecimalIntegerLiteral $nonOctalDecimalIntegerLiteral,
        DecimalDigit $decimalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): NonOctalDecimalIntegerLiteral;

    public function createWithNonOctalDigit(
        NonOctalDigit $nonOctalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): NonOctalDecimalIntegerLiteral;

    public function createWithLegacyOctalLikeDecimalIntegerLiteralAndNonOctalDigit(
        LegacyOctalLikeDecimalIntegerLiteral $legacyOctalLikeDecimalIntegerLiteral,
        NonOctalDigit $nonOctalDigit,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): NonOctalDecimalIntegerLiteral;
}
