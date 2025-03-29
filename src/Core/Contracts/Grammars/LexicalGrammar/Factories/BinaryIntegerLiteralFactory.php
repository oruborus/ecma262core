<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\BinaryDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\BinaryIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface BinaryIntegerLiteralFactory
{
    public function create(
        BinaryDigits $binaryDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): BinaryIntegerLiteral;
}
