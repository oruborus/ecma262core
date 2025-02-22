<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\IfStatement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Statement;

interface IfStatementFactory
{
    public function create(Expression $expression, Statement $statement): IfStatement;

    public function createWithElse(Expression $expression, Statement $statement, Statement $elseStatement): IfStatement;
}
