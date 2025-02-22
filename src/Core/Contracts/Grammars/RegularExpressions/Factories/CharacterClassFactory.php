<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterClass;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassContents;

interface CharacterClassFactory
{
    public function create(ClassContents $classRanges, bool $inverted): CharacterClass;
}
