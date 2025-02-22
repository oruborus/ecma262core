<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Atom;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\AtomEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Disjunction;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\GroupSpecifier;

interface AtomFactory
{
    public function createDot(int $leftCapturedParens): Atom;

    public function createAtomEscape(AtomEscape $atomEscape, int $leftCapturedParens): Atom;

    public function createNamedCapturingGroup(?GroupSpecifier $groupSpecifier, Disjunction $disjunction, int $leftCapturedParens): Atom;

    public function createNonCapturingGroup(Disjunction $disjunction, int $leftCapturedParens): Atom;
}
