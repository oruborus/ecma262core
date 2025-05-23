<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\CaseBlock;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\SwitchStatement;

interface SwitchStatementFactory
{
    public function create(Expression $expression, CaseBlock $caseBlock): SwitchStatement;
}
