<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\CaseBlock;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\CaseClauses;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\DefaultClause;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface CaseBlockFactory
{
    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CaseBlock;

    public function createWithCaseClauses(
        CaseClauses $caseClauses,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CaseBlock;

    public function createWithDefaultClause(
        DefaultClause $defaultClause,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CaseBlock;

    public function createWithCaseClausesAndDefaultClause(
        CaseClauses $caseClauses,
        DefaultClause $defaultClause,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CaseBlock;

    public function createWithDefaultClauseAndCaseClauses(
        DefaultClause $defaultClause,
        CaseClauses $caseClauses,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CaseBlock;

    public function create(
        CaseClauses $firstCaseClauses,
        DefaultClause $defaultClause,
        CaseClauses $caseClauses,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CaseBlock;
}
