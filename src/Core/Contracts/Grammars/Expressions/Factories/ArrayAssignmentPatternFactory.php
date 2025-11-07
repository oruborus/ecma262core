<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ArrayAssignmentPattern;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentRestElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ArrayAssignmentPatternFactory
{
    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayAssignmentPattern;

    public function createWithElision(
        Elision $elision,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayAssignmentPattern;

    public function createWithAssignmentRestElement(
        AssignmentRestElement $assignmentRestElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayAssignmentPattern;

    public function createWithElisionAndAssignmentRestElement(
        Elision $elision,
        AssignmentRestElement $assignmentRestElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayAssignmentPattern;

    public function createWithAssignmentElementList(
        AssignmentElementList $assignmentElementList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayAssignmentPattern;

    public function createWithAssignmentElementListAndElision(
        AssignmentElementList $assignmentElementList,
        Elision $elision,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayAssignmentPattern;

    public function createWithAssignmentElementListAndAssignmentRestElement(
        AssignmentElementList $assignmentElementList,
        AssignmentRestElement $assignmentRestElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayAssignmentPattern;

    public function create(
        AssignmentElementList $assignmentElementList,
        Elision $elision,
        AssignmentRestElement $assignmentRestElement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrayAssignmentPattern;
}
