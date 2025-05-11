<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface MatcherContinuation extends SpecificationValue
{
    public function __invoke(MatchState $y): MatchState|Failure;
}
