<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface BackReferenceMatcher
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-backreference-matcher
     */
    public function __invoke(Agent $agent, NumberValue $n, NumberValue $direction): Matcher;
}
