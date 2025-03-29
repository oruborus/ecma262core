<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\MatchRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface MakeMatchIndicesIndexPairArray
{
    /**
     * @see https://tc39.es/ecma262/#sec-makematchindicesindexpairarray
     *
     * @param ListValue<int, MatchRecord|UndefinedValue> $indices
     * @param ListValue<int, StringValue|UndefinedValue> $groupNames
     */
    public function __invoke(Agent $agent, StringValue $s, ListValue $indices, ListValue $groupNames, BooleanValue $hasGroups): ObjectValue;
}
