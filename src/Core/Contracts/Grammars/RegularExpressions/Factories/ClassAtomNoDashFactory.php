<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassAtomNoDash;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassEscape;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface ClassAtomNoDashFactory
{
    public function createWithSourceCharacter(
        int $sourceCharacter,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): ClassAtomNoDash;

    public function createWithClassEscape(
        ClassEscape $classEscape,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): ClassAtomNoDash;
}
