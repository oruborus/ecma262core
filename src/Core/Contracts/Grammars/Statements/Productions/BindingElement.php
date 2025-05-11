<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasKeyedBindingInitialization;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsSimpleParameterList;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface BindingElement extends HasIsSimpleParameterList, Binding, BindingElisionElement, HasKeyedBindingInitialization
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-hasinitializer
     */
    public function hasInitializer(): BooleanValue;
}
