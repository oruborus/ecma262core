<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface Matcher extends SpecificationValue
{
    public function __invoke(MatchState $x, MatcherContinuation $c): MatchState|Failure;
}
