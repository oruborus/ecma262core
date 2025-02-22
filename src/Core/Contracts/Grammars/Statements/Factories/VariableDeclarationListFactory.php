<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\VariableDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\VariableDeclarationList;

interface VariableDeclarationListFactory
{
    public function create(VariableDeclarationList $variableDeclarationList, VariableDeclaration $variableDeclaration): VariableDeclarationList;
}
