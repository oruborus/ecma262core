<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\CaseClause;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\CaseClauses;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface CaseClausesFactory
{
    public function create(
        CaseClauses $caseClauses,
        CaseClause $caseClause,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CaseClauses;
}
