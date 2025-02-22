<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\LabelledItem;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\Statement;

interface LabelledItemFactory
{
    public function create(Statement $statement): LabelledItem;
}
