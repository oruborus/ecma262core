<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Initializer;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingPattern;

interface BindingElementFactory
{
    public function create(BindingPattern $bindingPattern, ?Initializer $initializer): BindingElement;
}
