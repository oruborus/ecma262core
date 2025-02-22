<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BreakableStatement;

interface BreakableStatementFactory
{
    public function create(BreakableStatement $breakableStatement): BreakableStatement;
}
