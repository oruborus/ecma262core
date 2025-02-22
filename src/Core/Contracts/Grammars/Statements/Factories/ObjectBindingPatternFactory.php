<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingPropertyList;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingRestProperty;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\ObjectBindingPattern;

interface ObjectBindingPatternFactory
{
    public function create(
        BindingPropertyList $bindingPropertyList,
        ?BindingRestProperty $bindingRestProperty,
    ): ObjectBindingPattern;

    public function createWithBindingRestProperty(
        BindingRestProperty $bindingRestProperty,
    ): ObjectBindingPattern;

    public function createEmpty(): ObjectBindingPattern;
}
