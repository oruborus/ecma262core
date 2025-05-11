<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\Failure;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\MatcherContinuation;
use Oru\EcmaScript\Core\Contracts\Values\MatchState;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface RepeatMatcher
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-repeatmatcher-abstract-operation
     */
    public function __invoke(Matcher $m, NumberValue $min, NumberValue $max, BooleanValue $greedy, MatchState $x, MatcherContinuation $c, int $parenIndex, int $parenCount): MatchState|Failure;
}
