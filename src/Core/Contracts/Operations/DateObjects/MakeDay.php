<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DateObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface MakeDay
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-makeday
     */
    public function __invoke(Agent $agent, NumberValue $year, NumberValue $month, NumberValue $date): NumberValue;
}
