<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\Direction;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface BackReferenceMatcher
{
    /**
     * @see https://tc39.es/ecma262/#sec-backreference-matcher
     *
     * @param ListValue<int, NumberValue> $ns
     */
    public function __invoke(Agent $agent, RegExpRecord $rer, ListValue $n, Direction $direction): Matcher;
}
