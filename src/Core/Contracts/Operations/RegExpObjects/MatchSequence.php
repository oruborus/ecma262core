<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\Direction;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;

interface MatchSequence
{
    /** @see https://tc39.es/ecma262/#sec-matchsequence */
    public function __invoke(Agent $agent, Matcher $m1, Matcher $m2, Direction $direction): Matcher;
}
