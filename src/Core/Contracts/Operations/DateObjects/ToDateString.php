<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DateObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ToDateString
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-todatestring
     */
    public function __invoke(Agent $agent, NumberValue $tv): StringValue;
}
