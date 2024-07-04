<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\DateObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface LocalTZA
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-localtza
     */
    public function __invoke(Agent $agent, NumberValue $t, BooleanValue $isUTC): NumberValue;
}
