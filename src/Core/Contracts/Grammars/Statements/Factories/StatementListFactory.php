<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\StatementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\StatementListItem;

interface StatementListFactory
{
    public function create(StatementList $statementList, StatementListItem $statementListItem): StatementList;
}
