<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface PatternResult extends Value
{
    public function __invoke(Agent $agent, StringValue $str, NumberValue $index): ?State;
}
