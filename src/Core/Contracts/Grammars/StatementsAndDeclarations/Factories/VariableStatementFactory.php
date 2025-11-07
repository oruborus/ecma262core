<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\VariableDeclarationList;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\VariableStatement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface VariableStatementFactory
{
    public function create(
        VariableDeclarationList $variableDeclarationList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): VariableStatement;
}
