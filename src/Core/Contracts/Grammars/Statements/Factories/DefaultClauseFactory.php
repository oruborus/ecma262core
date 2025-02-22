<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\DefaultClause;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\StatementList;

interface DefaultClauseFactory
{
    public function create(?StatementList $statementList): DefaultClause;
}
