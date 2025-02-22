<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LabelIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\LabelledItem;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\LabelledStatement;

interface LabelledStatementFactory
{
    public function create(LabelIdentifier $labelIdentifier, LabelledItem $labelledItem): LabelledStatement;
}
