<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsSimpleParameterList;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface PropertySetParameterList extends Node, HasContains, HasBoundNames, HasIsSimpleParameterList
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-expectedargumentcount
     */
    public function expectedArgumentCount(): NumberValue;
}
