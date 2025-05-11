<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

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
     * @param ListValue<NumberValue> $ns
     */
    public function __invoke(RegExpRecord $rer, ListValue $ns, Direction $direction): Matcher;
}
