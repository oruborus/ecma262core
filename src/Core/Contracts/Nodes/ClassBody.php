<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface ClassBody extends Node
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-nonconstructormethoddefinitions
     *
     * @return ListValue<int, ClassElement>
     */
    public function nonConstructorMethodDefinitions(Agent $agent): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-constructormethod
     */
    public function constructorMethod(Agent $agent): ?ClassElement;
}
