<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface PatternResult extends Value
{
    /** @param ListValue<int> $input */
    public function __invoke(Agent $agent, ListValue $input, NumberValue $index): MatchState|Failure;
}
