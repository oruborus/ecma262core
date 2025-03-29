<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassAtom;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\ClassContents;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\NonemptyClassRanges;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\NonemptyClassRangesNoDash;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface NonemptyClassRangesFactory
{
    public function createWithoutDash(
        ClassAtom $classAtom,
        NonemptyClassRangesNoDash $nonemptyClassRangesNoDash,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NonemptyClassRanges;

    public function createWithDash(
        ClassAtom $classAtom1,
        ClassAtom $classAtom2,
        ClassContents $classContents,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): NonemptyClassRanges;
}
