<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterClass;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassContents;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface CharacterClassFactory
{
    public function create(
        ClassContents $classContents,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): CharacterClass;

    public function createNegated(
        ClassContents $classContents,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): CharacterClass;
}
