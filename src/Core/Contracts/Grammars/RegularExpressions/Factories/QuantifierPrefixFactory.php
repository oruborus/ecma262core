<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\QuantifierPrefix;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface QuantifierPrefixFactory
{
    public function createAsterisk(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): QuantifierPrefix;

    public function createPlus(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): QuantifierPrefix;

    public function createQuestionMark(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): QuantifierPrefix;

    public function createExact(
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): QuantifierPrefix;

    public function createExactRange(
        DecimalDigits $min,
        DecimalDigits $max,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): QuantifierPrefix;

    public function createOpenRange(
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): QuantifierPrefix;
}
