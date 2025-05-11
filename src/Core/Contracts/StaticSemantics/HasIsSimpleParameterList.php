<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface HasIsSimpleParameterList
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-issimpleparameterlist
     */
    public function isSimpleParameterList(): BooleanValue;
}
