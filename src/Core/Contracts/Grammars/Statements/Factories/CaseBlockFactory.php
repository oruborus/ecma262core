<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\CaseBlock;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\CaseClauses;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\DefaultClause;

interface CaseBlockFactory
{
    public function createEmpty(): CaseBlock;

    public function createWithFirstCaseClauses(?CaseClauses $caseClauses): CaseBlock;

    public function createWithFirstCaseClausesAndDefaultClause(?CaseClauses $caseClauses, ?DefaultClause $defaultClause): CaseBlock;

    public function createComplete(?CaseClauses $firstCaseClauses, ?DefaultClause $defaultClause, ?CaseClauses $caseClauses): CaseBlock;
}
