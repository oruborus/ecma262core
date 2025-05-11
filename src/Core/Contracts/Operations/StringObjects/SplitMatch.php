<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\StringObjects;

use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface SplitMatch
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-splitmatch
     */
    public function __invoke(StringValue $s, NumberValue $q, StringValue $r): ?NumberValue;
}
