<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\EmptyStatement;

interface EmptyStatementFactory
{
    public function create(): EmptyStatement;
}
