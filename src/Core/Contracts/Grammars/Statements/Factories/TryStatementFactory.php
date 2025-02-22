<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Block;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Catch_;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Finally_;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\TryStatement;

interface TryStatementFactory
{
    public function create(Block $block, Catch_ $catch, ?Finally_ $finally): TryStatement;

    public function createWithoutCatch(Block $block, Finally_ $finally): TryStatement;
}
