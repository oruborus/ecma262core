<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingElement;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContainsExpression;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface UniqueFormalParameters extends HasContainsExpression, BindingElement
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-expectedargumentcount
     */
    public function expectedArgumentCount(): NumberValue;
}
