<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\StatementList;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\StatementListItem;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface StatementListFactory
{
    public function create(
        StatementList $statementList,
        StatementListItem $statementListItem,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): StatementList;
}
