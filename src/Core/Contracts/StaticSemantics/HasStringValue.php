<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface HasStringValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-stringvalue
     */
    public function stringValue(): StringValue;
}
