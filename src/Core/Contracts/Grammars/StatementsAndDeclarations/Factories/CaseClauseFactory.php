<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\CaseClause;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\StatementList;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface CaseClauseFactory
{
    public function createWithoutStatementList(
        Expression $expression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CaseClause;

    public function create(
        Expression $expression,
        StatementList $statementList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CaseClause;
}
