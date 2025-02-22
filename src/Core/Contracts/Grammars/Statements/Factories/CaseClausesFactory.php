<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\CaseClause;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\CaseClauses;

interface CaseClausesFactory
{
    public function create(CaseClauses $caseClauses, CaseClause $caseClause): CaseClauses;
}
