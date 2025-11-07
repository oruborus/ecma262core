<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentOperator;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AssignmentOperatorFactory
{
    public function createAsteriskEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createSolidusEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createPercentEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createPlusEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createMinusEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createDoubleLessThanEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createDoubleGreaterThanEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createTripleGreaterThanEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createAmpersandEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createCircumflexEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createPipeEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;

    public function createDoubleAsteriskEquals(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AssignmentOperator;
}
