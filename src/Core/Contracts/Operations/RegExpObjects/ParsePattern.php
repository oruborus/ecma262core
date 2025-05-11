<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Pattern;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface ParsePattern
{
    /**
     * @see https://tc39.es/ecma262/#sec-parsepattern
     *
     * @param ListValue<int> $patternText
     * @return Pattern|ListValue<ObjectValue> $patternText
     */
    public function __invoke(ListValue $patternText, BooleanValue $u, BooleanValue $v): Pattern|ListValue;
}
