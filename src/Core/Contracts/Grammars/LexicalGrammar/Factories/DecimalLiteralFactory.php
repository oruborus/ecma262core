<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\ExponentPart;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface DecimalLiteralFactory
{
    public function create(
        DecimalIntegerLiteral $decimalIntegerLiteral,
        DecimalDigits $decimalDigits,
        ExponentPart $exponentPart,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalLiteral;

    public function createWithoutExponentPart(
        DecimalIntegerLiteral $decimalIntegerLiteral,
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalLiteral;

    public function createWithoutDecimalDigits(
        DecimalIntegerLiteral $decimalIntegerLiteral,
        ExponentPart $exponentPart,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalLiteral;

    public function createWithoutDecimalDigitsAndExponentPart(
        DecimalIntegerLiteral $decimalIntegerLiteral,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalLiteral;

    public function createWithoutDecimalIntegerLiteral(
        DecimalDigits $decimalDigits,
        ExponentPart $exponentPart,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalLiteral;

    public function createWithoutDecimalIntegerLiteralAndExponentPart(
        DecimalDigits $decimalDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DecimalLiteral;
}
