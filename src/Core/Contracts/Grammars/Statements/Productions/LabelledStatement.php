<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

interface LabelledStatement extends Statement
{
    public function labelledItem(): LabelledItem;
}
