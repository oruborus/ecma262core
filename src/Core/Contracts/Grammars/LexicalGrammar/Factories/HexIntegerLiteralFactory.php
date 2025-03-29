<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface HexIntegerLiteralFactory
{
    public function create(
        HexDigits $hexDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): HexIntegerLiteral;
}
