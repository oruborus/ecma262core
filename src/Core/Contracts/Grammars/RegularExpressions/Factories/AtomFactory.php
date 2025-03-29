<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Atom;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\AtomEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Disjunction;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\GroupSpecifier;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegularExpressionModifiers;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface AtomFactory
{
    public function createDot(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Atom;

    public function createAtomEscape(
        AtomEscape $atomEscape,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Atom;

    public function createCapturingGroup(
        Disjunction $disjunction,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Atom;

    public function createNamedCapturingGroup(
        GroupSpecifier $groupSpecifier,
        Disjunction $disjunction,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Atom;

    public function createNonCapturingGroup(
        RegularExpressionModifiers $addRegularExpressionModifiers,
        Disjunction $disjunction,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Atom;

    public function createNonCapturingGroupWithRemove(
        RegularExpressionModifiers $addRegularExpressionModifiers,
        RegularExpressionModifiers $removeRegularExpressionModifiers,
        Disjunction $disjunction,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Atom;
}
