<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\BreakableStatement;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\IterationStatement;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\SwitchStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface BreakableStatementFactory
{
    public function createWithIterationStatement(
        IterationStatement $iterationStatement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BreakableStatement;

    public function createWithSwitchStatement(
        SwitchStatement $switchStatement,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): BreakableStatement;
}
