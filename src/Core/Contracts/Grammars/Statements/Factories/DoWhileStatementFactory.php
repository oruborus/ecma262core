<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\DoWhileStatement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Statement;

interface DoWhileStatementFactory
{
    public function create(Statement $statement, Expression $expression): DoWhileStatement;
}
