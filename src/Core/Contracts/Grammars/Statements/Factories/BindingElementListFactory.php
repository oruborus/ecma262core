<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingElisionElement;

interface BindingElementListFactory
{
    public function create(
        BindingElementList $bindingElementList,
        BindingElisionElement $bindingElisionElement,
    ): BindingElementList;
}
