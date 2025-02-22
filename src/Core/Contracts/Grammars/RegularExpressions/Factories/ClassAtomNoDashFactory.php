<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassAtomNoDash;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassEscape;

interface ClassAtomNoDashFactory
{
    public function createWithSourceCharacter(int $sourceCharacter): ClassAtomNoDash;

    public function createWithClassEscape(ClassEscape $classEscape): ClassAtomNoDash;
}
