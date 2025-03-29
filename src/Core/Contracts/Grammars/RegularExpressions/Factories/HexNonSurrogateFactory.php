<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\Hex4Digits;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\HexNonSurrogate;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface HexNonSurrogateFactory
{
    public function create(
        Hex4Digits $hex4Digits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): HexNonSurrogate;
}
