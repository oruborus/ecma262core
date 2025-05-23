<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Statement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\WhileStatement;

interface WhileStatementFactory
{
    public function create(Expression $expression, Statement $statement): WhileStatement;
}
