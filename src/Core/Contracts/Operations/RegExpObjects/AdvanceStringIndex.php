<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface AdvanceStringIndex
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-advancestringindex
     */
    public function __invoke(StringValue $s, NumberValue $index, BooleanValue $unicode): NumberValue;
}
