<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Block;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Catch_;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\CatchParameter;

interface CatchFactory
{
    public function create(CatchParameter $catchParameter, Block $block): Catch_;

    public function createWithoutCatchParameter(Block $block): Catch_;
}
