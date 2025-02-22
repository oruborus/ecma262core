<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonDecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NumericLiteral;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface NumericLiteralFactory
{
    public function create(
        NonDecimalIntegerLiteral $nonDecimalIntegerLiteral,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): NumericLiteral;
}
