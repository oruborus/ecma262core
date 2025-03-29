<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonDecimalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NumericLiteral;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface NumericLiteralFactory
{
    public function create(
        NonDecimalIntegerLiteral $nonDecimalIntegerLiteral,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NumericLiteral;
}
