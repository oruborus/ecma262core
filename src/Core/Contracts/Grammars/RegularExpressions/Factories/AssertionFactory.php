<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Assertion;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Disjunction;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface AssertionFactory
{
    public function createNegativeLookahead(
        Disjunction $disjunction,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Assertion;

    public function createNegativeLookbehind(
        Disjunction $disjunction,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Assertion;

    public function createPositiveLookahead(
        Disjunction $disjunction,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Assertion;

    public function createPositiveLookbehind(
        Disjunction $disjunction,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Assertion;

    public function createEndOfTheLine(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Assertion;

    public function createStartOfTheLine(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Assertion;

    public function createWordBoundary(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Assertion;

    public function createNotWordBoundary(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): Assertion;
}
