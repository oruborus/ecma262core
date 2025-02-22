<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassAtom;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassAtomNoDash;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassContents;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\NonemptyClassRangesNoDash;

interface NonemptyClassRangesNoDashFactory
{
    public function createWithClassAtom(ClassAtom $classAtom): NonemptyClassRangesNoDash;

    public function createWithoutDash(
        ClassAtomNoDash $classAtomNoDash,
        ?NonemptyClassRangesNoDash $nonemptyClassRangesNoDash,
    ): NonemptyClassRangesNoDash;

    public function createWithDash(
        ClassAtomNoDash $classAtomNoDash,
        ClassAtom $classAtom,
        ?ClassContents $classContents,
    ): NonemptyClassRangesNoDash;
}
