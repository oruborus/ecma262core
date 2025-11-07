<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\VariableDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\VariableDeclarationList;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface VariableDeclarationListFactory
{
    public function create(
        VariableDeclarationList $variableDeclarationList,
        VariableDeclaration $variableDeclaration,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): VariableDeclarationList;
}
