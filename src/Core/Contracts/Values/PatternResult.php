<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface PatternResult extends Value
{
    /** @param ListValue<int> $input */
    public function __invoke(ListValue $input, NumberValue $index): MatchState|Failure;
}
