<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DateObjects;

use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface UTC
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-utc
     */
    public function __invoke(NumberValue $t): NumberValue;
}
