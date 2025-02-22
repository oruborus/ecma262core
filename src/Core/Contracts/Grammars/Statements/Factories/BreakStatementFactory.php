<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LabelIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BreakStatement;

interface BreakStatementFactory
{
    public function create(): BreakStatement;

    public function createWithLabelIdentifier(LabelIdentifier $labelIdentifier): BreakStatement;
}
