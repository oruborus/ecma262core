<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\Hex4Digits;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\HexTrailSurrogate;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface HexTrailSurrogateFactory
{
    public function create(
        Hex4Digits $hex4Digits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): HexTrailSurrogate;
}
