<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface HasIsDestructuring
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-isdestructuring
     */
    public function isDestructuring(): BooleanValue;
}
