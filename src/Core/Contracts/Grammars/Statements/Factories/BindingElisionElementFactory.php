<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingElement;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingElisionElement;

interface BindingElisionElementFactory
{
    public function create(Elision $elision, BindingElement $bindingElement): BindingElisionElement;
}
