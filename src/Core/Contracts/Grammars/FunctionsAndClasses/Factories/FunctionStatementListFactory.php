<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionStatementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\StatementList;

interface FunctionStatementListFactory
{
    public function create(?StatementList $statementList): FunctionStatementList;
}
