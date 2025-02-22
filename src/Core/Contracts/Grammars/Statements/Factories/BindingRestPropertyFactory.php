<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingRestProperty;

interface BindingRestPropertyFactory
{
    public function create(BindingIdentifier $bindingIdentifier): BindingRestProperty;
}
