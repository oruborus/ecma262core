<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ReturnStatement;

interface ReturnStatementFactory
{
    public function create(): ReturnStatement;

    public function createWithExpression(Expression $expression): ReturnStatement;
}
