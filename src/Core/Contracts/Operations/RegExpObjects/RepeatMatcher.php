<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\Continuation;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\State;

interface RepeatMatcher
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-repeatmatcher-abstract-operation
     */
    public function __invoke(Agent $agent, Matcher $m, NumberValue $min, NumberValue $max, BooleanValue $greedy, State $x, Continuation $c, int $parenIndex, int $parenCount): ?State;
}
