<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\CharSet;
use Oru\EcmaScript\Core\Contracts\Values\Direction;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface CharacterSetMatcher
{
    /** @see https://tc39.es/ecma262/#sec-runtime-semantics-charactersetmatcher-abstract-operation */
    public function __invoke(
        RegExpRecord $rer,
        CharSet $a,
        BooleanValue $invert,
        Direction $direction
    ): Matcher;
}
