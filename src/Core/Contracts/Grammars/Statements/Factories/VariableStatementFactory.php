<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\VariableDeclarationList;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\VariableStatement;

interface VariableStatementFactory
{
    public function create(VariableDeclarationList $variableDeclarationList): VariableStatement;
}
