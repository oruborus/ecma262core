<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegExpIdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegExpIdentifierPart;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegExpIdentifierNameFactory
{
    public function create(
        RegExpIdentifierName $regExpIdentifierName,
        RegExpIdentifierPart $regExpIdentifierPart,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegExpIdentifierName;
}
