<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DateObjects;

use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface DateString
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-datestring
     * @see https://262.ecma-international.org/12.0/#sec-todatestring-day-names
     * @see https://262.ecma-international.org/12.0/#sec-todatestring-month-names
     */
    public function __invoke(NumberValue $tv): StringValue;
}
