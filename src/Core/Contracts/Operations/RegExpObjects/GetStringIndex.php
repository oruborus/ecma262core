<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface GetStringIndex
{
    /** @see https://tc39.es/ecma262/#sec-getstringindex */
    public function __invoke(StringValue $s, NumberValue $codePointIndex): NumberValue;
}
