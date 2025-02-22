<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Block;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BlockStatement;

interface BlockStatementFactory
{
    public function create(Block $block): BlockStatement;
}
