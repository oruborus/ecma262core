<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassAtom;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassAtomNoDash;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassContents;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\NonemptyClassRangesNoDash;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface NonemptyClassRangesNoDashFactory
{
    public function createWithoutDash(
        ClassAtomNoDash $classAtomNoDash,
        NonemptyClassRangesNoDash $nonemptyClassRangesNoDash,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NonemptyClassRangesNoDash;

    public function createWithDash(
        ClassAtomNoDash $classAtomNoDash,
        ClassAtom $classAtom,
        ?ClassContents $classContents,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NonemptyClassRangesNoDash;
}
