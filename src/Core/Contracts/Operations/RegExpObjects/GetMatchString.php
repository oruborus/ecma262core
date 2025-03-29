<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\MatchRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface GetMatchString
{
    /** @see https://tc39.es/ecma262/#sec-getmatchstring */
    public function __invoke(Agent $agent, StringValue $s, MatchRecord $match): StringValue;
}
