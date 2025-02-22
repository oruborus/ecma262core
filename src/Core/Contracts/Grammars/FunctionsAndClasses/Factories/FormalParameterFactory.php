<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameter;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingElement;

interface FormalParameterFactory
{
    public function create(BindingElement $bindingElement): FormalParameter;
}
