<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingPropertyList;

interface BindingPropertyListFactory
{
    public function create(
        BindingPropertyList $bindingPropertyList,
        BindingProperty $bindingProperty,
    ): BindingPropertyList;
}
