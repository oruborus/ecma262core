<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionStatementList;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\StatementList;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface FunctionStatementListFactory
{
    public function create(
        StatementList $statementList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FunctionStatementList;

    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FunctionStatementList;
}
