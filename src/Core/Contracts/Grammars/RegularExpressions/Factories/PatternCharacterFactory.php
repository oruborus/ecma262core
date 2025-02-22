<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\PatternCharacter;

interface PatternCharacterFactory
{
    public function create(int $sourceCharacter): PatternCharacter;
}
