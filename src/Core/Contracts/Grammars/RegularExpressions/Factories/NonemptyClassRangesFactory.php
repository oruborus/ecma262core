<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassAtom;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassContents;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\NonemptyClassRanges;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\NonemptyClassRangesNoDash;

interface NonemptyClassRangesFactory
{
    public function createWithClassAtom(ClassAtom $classAtom): NonemptyClassRanges;

    public function createWithoutDash(
        ClassAtom $classAtom,
        ?NonemptyClassRangesNoDash $nonemptyClassRangesNoDash,
    ): NonemptyClassRanges;

    public function createWithDash(
        ClassAtom $classAtom1,
        ClassAtom $classAtom2,
        ?ClassContents $classContents,
    ): NonemptyClassRanges;
}
