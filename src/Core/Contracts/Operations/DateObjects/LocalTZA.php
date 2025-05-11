<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DateObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface LocalTZA
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-localtza
     */
    public function __invoke(NumberValue $t, BooleanValue $isUTC): NumberValue;
}
