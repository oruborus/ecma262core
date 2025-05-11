<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\HexTrailSurrogate;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface HexTrailSurrogateLexer
{
    /** @see https://tc39.es/ecma262/#prod-HexTrailSurrogate */
    public function tokenize(SourceText $sourceText, Position $position, Parameters $parameters): ?HexTrailSurrogate;
}
