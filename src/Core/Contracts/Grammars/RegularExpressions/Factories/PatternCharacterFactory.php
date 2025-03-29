<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\PatternCharacter;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface PatternCharacterFactory
{
    public function create(
        int $sourceCharacter,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): PatternCharacter;
}
