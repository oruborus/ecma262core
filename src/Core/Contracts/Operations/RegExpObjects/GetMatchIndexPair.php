<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\MatchRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface GetMatchIndexPair
{
    /** @see https://tc39.es/ecma262/#sec-getmatchindexpair */
    public function __invoke(StringValue $s, MatchRecord $match): ObjectValue;
}
