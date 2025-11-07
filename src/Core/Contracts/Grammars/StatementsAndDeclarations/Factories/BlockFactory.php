<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Block;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\StatementList;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BlockFactory
{
    public function create(
        StatementList $statementList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Block;

    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Block;
}
