<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DateObjects;

use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface TimeZoneString
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-timezonestring
     */
    public function __invoke(NumberValue $tv): StringValue;
}
