<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LeftHandSideExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ForBinding;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ForDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\ForInOfStatement;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Statement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ForInOfStatementFactory
{
    public function createForInWithLeftHandSideExpression(
        LeftHandSideExpression $leftHandSideExpression,
        Expression $expression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForInOfStatement;

    public function createForInWithForBinding(
        ForBinding $forBinding,
        Expression $expression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForInOfStatement;

    public function createForInWithForDeclaration(
        ForDeclaration $forDeclaration,
        Expression $expression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForInOfStatement;

    public function createForOfWithLeftHandSideExpression(
        LeftHandSideExpression $leftHandSideExpression,
        AssignmentExpression $assignmentExpression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForInOfStatement;

    public function createForOfWithForBinding(
        ForBinding $forBinding,
        AssignmentExpression $assignmentExpression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForInOfStatement;

    public function createForOfWithForDeclaration(
        ForDeclaration $forDeclaration,
        AssignmentExpression $assignmentExpression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForInOfStatement;

    public function createForAwaitOfWithLeftHandSideExpression(
        LeftHandSideExpression $leftHandSideExpression,
        AssignmentExpression $assignmentExpression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForInOfStatement;

    public function createForAwaitOfWithForBinding(
        ForBinding $forBinding,
        AssignmentExpression $assignmentExpression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForInOfStatement;

    public function createForAwaitOfWithForDeclaration(
        ForDeclaration $forDeclaration,
        AssignmentExpression $assignmentExpression,
        Statement $statement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ForInOfStatement;
}
