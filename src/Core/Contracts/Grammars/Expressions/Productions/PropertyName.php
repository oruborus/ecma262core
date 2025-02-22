<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElementName;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface PropertyName extends ClassElementName
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-iscomputedpropertykey
     */
    public function isComputedPropertyKey(Agent $agent): BooleanValue;
}
