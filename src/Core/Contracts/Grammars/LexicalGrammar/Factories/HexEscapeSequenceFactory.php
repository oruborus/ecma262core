<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexDigit;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexEscapeSequence;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface HexEscapeSequenceFactory
{
    public function create(
        HexDigit $firstHexDigit,
        HexDigit $secondHexDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): HexEscapeSequence;
}
