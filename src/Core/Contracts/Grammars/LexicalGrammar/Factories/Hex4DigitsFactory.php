<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\Hex4Digits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexDigit;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface Hex4DigitsFactory
{
    public function create(
        HexDigit $hexDigit1,
        HexDigit $hexDigit2,
        HexDigit $hexDigit3,
        HexDigit $hexDigit4,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Hex4Digits;
}
