<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\CharSet;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface CharacterSetMatcher
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-charactersetmatcher-abstract-operation
     */
    public function __invoke(
        Agent $agent,
        CharSet $a,
        BooleanValue $invert,
        NumberValue $direction
    ): Matcher;
}
