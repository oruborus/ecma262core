<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;

interface EmptyMatcher
{
    /** @see https://tc39.es/ecma262/#sec-emptymatcher */
    public function __invoke(Agent $agent): Matcher;
}
