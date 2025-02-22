<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PropertyName;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingProperty;

interface BindingPropertyFactory
{
    public function create(PropertyName $propertyName, BindingElement $bindingElement): BindingProperty;
}
